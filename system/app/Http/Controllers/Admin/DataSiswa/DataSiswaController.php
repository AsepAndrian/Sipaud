<?php

namespace App\Http\Controllers\Admin\DataSiswa;

use App\Http\Controllers\Controller;
use App\Models\DataSiswaa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataSiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        // Mengambil data siswa berdasarkan pencarian, dengan pagination
        $list_siswa = DataSiswaa::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('username', 'like', '%' . $search . '%')
                ->orWhere('nisn', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('admin.siswa.index', compact('list_siswa'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:data_siswa,username',
            'nisn' => 'required|numeric|unique:data_siswa,nisn',
            'agama' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'status' => 'required|string',
            'tahun_masuk' => 'required|date',
            'password' => 'required|string|min:8',
            'foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('uploads/siswa', 'public');
        }

        DataSiswaa::create($data);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $siswa = DataSiswaa::findOrFail($id);
        return view('admin.siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = DataSiswaa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:data_siswa,username,' . $id,
            'nisn' => 'required|numeric|unique:data_siswa,nisn,' . $id,
            'agama' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'status' => 'required|string',
            'tahun_masuk' => 'required|date',
            'password' => 'nullable|string|min:8',
            'foto' => 'nullable|image|max:2048',
        ]);

        $siswa = DataSiswaa::findOrFail($id);

        $data = $request->all();

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('foto')) {
            if ($siswa->foto) {
                Storage::disk('public')->delete($siswa->foto);
            }
            $data['foto'] = $request->file('foto')->store('uploads/siswa', 'public');
        }

        $siswa->update($data);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = DataSiswaa::findOrFail($id);

        if ($siswa->foto) {
            Storage::disk('public')->delete($siswa->foto);
        }

        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
