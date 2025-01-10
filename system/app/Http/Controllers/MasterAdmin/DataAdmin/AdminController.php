<?php

namespace App\Http\Controllers\MasterAdmin\DataAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
    
        // Mengambil data admin berdasarkan pencarian, dengan pagination
        $list_admin = Admin::when($search, function ($query, $search) {
            return $query->where('username', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('sekolah_asal', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('master-admin.data-admin.index', compact('list_admin'));
    }

    public function create()
    {
        return view('master-admin.data-admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'sekolah_asal' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $lastAdmin = Admin::orderBy('nomor', 'desc')->first();
        $nextNomor = $lastAdmin ? $lastAdmin->nomor + 1 : 1;

        $admin = new Admin();
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->sekolah_asal = $request->sekolah_asal;
        $admin->password = bcrypt($request->password);
        $admin->nomor = $nextNomor;
        $admin->save();

        return redirect()->route('data-admin.index')->with('success', 'Admin berhasil ditambahkan');
    }

    public function show($admin){
        $data['admin'] = admin::find($admin);
        return view('master-admin.data-admin.show', $data);
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('master-admin.data-admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $id,
            'sekolah_asal' => 'required|string|max:255',
            'password' => 'nullable|min:6',
        ]);

        $admin = Admin::findOrFail($id);
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->sekolah_asal = $request->sekolah_asal;

        if ($request->filled('password')) {
            $admin->password = bcrypt($request->password);
        }

        $admin->save();

        return redirect()->route('data-admin.index')->with('success', 'Admin berhasil diperbarui');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);

        if ($admin->delete()) {
            $admins = Admin::orderBy('id')->get();
            foreach ($admins as $index => $adminItem) {
                $adminItem->nomor = $index + 1;
                $adminItem->save();
            }

            return redirect()->route('data-admin.index')->with('success', 'Admin berhasil dihapus');
        }

        return redirect()->route('data-admin.index')->with('error', 'Gagal menghapus admin');
    }

    public function dashboard()
    {
        $adminCount = Admin::count();
        return view('dashboard', compact('adminCount'));
    }
}
