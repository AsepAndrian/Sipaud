
    <x-master-admin>
        <div class="nav_deg" style="margin: 10px;">
            <div
                style="display: flex; justify-content: center; align-items: center; width: 100%; height: 50px; background-color: #00AD7C; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15); border-radius: 8px;">
                <h1 style="margin: 0; padding: 0 10px; text-align: center; font-size: 20px; color: white;">
                    Detail Data Sekolah PAUD - {{ $sekolah->nama_sekolah }}
                </h1>
            </div>
        </div>
    
        <main class="main users chart-page" id="skip-target" style="padding: 20px; display: flex; justify-content: center;">
            <div class="table-container"
                style="width: 100%; max-width: 800px; background-color: #ffffff; border-radius: 12px; padding: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);">
                
                <table style="width: 100%; border-collapse: collapse; font-size: 16px;">
                    <tbody>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Nama Sekolah</td>
                            <td style="padding: 10px;">{{ $sekolah->nama_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">NPSN</td>
                            <td style="padding: 10px;">{{ $sekolah->npsn }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Email</td>
                            <td style="padding: 10px;">{{ $sekolah->email }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Alamat Lengkap</td>
                            <td style="padding: 10px;">{{ $sekolah->alamat_lengkap }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Telepon Sekolah</td>
                            <td style="padding: 10px;">{{ $sekolah->telepon_sekolah }}</td>
                        </tr>
                        {{-- <tr>
                            <td style="padding: 10px; font-weight: bold;">Jenjang Pendidikan</td>
                            <td style="padding: 10px;">{{ $sekolah->jenjang_pendidikan }}</td>
                        </tr> --}}
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Kepala Sekolah</td>
                            <td style="padding: 10px;">{{ $sekolah->kepalaq_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Status Sekolah</td>
                            <td style="padding: 10px;">{{ $sekolah->status_sekolah }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Jumlah Guru</td>
                            <td style="padding: 10px;">{{ $sekolah->jumlah_guru }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Jumlah Siswa</td>
                            <td style="padding: 10px;">{{ $sekolah->jumlah_siswa }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Tahun Berdiri</td>
                            <td style="padding: 10px;">{{ $sekolah->tahun_berdiri }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Logo Sekolah</td>
                            <td style="padding: 10px;">
                                <img src="{{ url("public/$sekolah->logo_sekolah") }}" style="width: 100px; border-radius: 4%;">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Foto Sekolah</td>
                            <td style="padding: 10px;">
                                <img src="{{ url("public/$sekolah->foto_sekolah") }}" style="width: 100px; border-radius: 4%;">
                            </td>
                        </tr>
                    </tbody>
                </table>
    
                <div style="margin-top: 20px; text-align: center;">
                    <a href="{{ url('master-admin/data-sekolah') }}" 
                       style="padding: 10px 20px; background-color: #4fb7e0; color: white; border-radius: 5px; text-decoration: none; font-weight: bold;">
                       Kembali
                    </a>
                </div>
            </div>
        </main>
    </x-master-admin>
    