<?php

namespace App\Http\Controllers\MasterAdmin\DataSekolah;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index(Request $request)
    {
        // Ambil input pencarian dari request
        $search = $request->input('search', null);
    
        // Query data sekolah dengan fitur pencarian di semua kolom
        $list_sekolah = Sekolah::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama_sekolah', 'like', '%' . $search . '%')
                      ->orWhere('npsn', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%')
                      ->orWhere('alamat_lengkap', 'like', '%' . $search . '%')
                      ->orWhere('telepon_sekolah', 'like', '%' . $search . '%')
                      ->orWhere('kepalaq_sekolah', 'like', '%' . $search . '%')
                      ->orWhere('status_sekolah', 'like', '%' . $search . '%')
                      ->orWhere('jumlah_guru', 'like', '%' . $search . '%')
                      ->orWhere('jumlah_siswa', 'like', '%' . $search . '%')
                      ->orWhere('tahun_berdiri', 'like', '%' . $search . '%');
                });
            })
            ->paginate(10)
            ->withQueryString(); // Pertahankan query string saat paginasi
    
        // Tampilkan view dengan data hasil pencarian
        return view('master-admin.data-sekolah.index', compact('list_sekolah'));
    }

    public function create()
    {
        return view('master-admin.data-sekolah.create');
    }

    public function store(Request $request)
    {
       

        $sekolah = new sekolah();
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->npsn = $request->npsn;
        $sekolah->email = $request->email;
        $sekolah->alamat_lengkap = $request->alamat_lengkap;
        $sekolah->telepon_sekolah = $request->telepon_sekolah;

        $sekolah->kepalaq_sekolah = $request->kepala_sekolah;
        $sekolah->status_sekolah = $request->status_sekolah;
        $sekolah->jumlah_guru = $request->jumlah_guru;
        $sekolah->jumlah_siswa = $request->jumlah_siswa;
        $sekolah->tahun_berdiri = $request->tahun_berdiri;
        $sekolah->handleUploadPotoSekolah();
        $sekolah->handleUploadLogoSekolah();
       
        $sekolah->save();

        return redirect('master-admin/data-sekolah')->with('success', 'Sekolah berhasil ditambahkan');
    }

    public function show($sekolah){
        $data['sekolah'] = Sekolah::find($sekolah);
        return view('master-admin.data-sekolah.show', $data);
    }
    public function edit($sekolah)
    {
        $data['sekolah'] = Sekolah::find($sekolah);
        return view('master-admin.data-sekolah.edit', $data);
    }

    public function update(Request $request, $sekolah)
    {
        
        $sekolah = Sekolah::find($sekolah);
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->npsn = $request->npsn;
        $sekolah->email = $request->email;
        $sekolah->alamat_lengkap = $request->alamat_lengkap;
        $sekolah->telepon_sekolah = $request->telepon_sekolah;

        $sekolah->kepalaq_sekolah = $request->kepala_sekolah;
        $sekolah->status_sekolah = $request->status_sekolah;
        $sekolah->jumlah_guru = $request->jumlah_guru;
        $sekolah->jumlah_siswa = $request->jumlah_siswa;
        $sekolah->tahun_berdiri = $request->tahun_berdiri;
        $sekolah->handleUploadPotoSekolah();
        $sekolah->handleUploadLogoSekolah();
       
        $sekolah->save();

        if ($request->filled('password')) {
            $sekolah->password = bcrypt($request->password);
        }

        $sekolah->save();

        return redirect()->route('data-sekolah.index')->with('success', 'Sekolah berhasil diperbarui');
    }

    public function destroy($sekolah)
    {
        Sekolah::destroy($sekolah);

        return redirect('master-admin/data-sekolah')->with('error', 'Data Sekolah Berhasil di Hapus');
    }

    public function dashboard()
    {
        $sekolahCount = Sekolah::count();
        return view('dashboard', compact('sekolahCount'));
    }
}
