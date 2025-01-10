<x-master-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            {{-- form untuk data sekolah --}}
            <form action="{{ url('master-admin/data-sekolah', $sekolah->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form">
                    <h2 class="main-title">Tambahkan Sekolah</h2>

                    <div class="form-label-wrapper">
                        <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" class="form-input" value="{{ $sekolah->nama_sekolah }}" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="npsn" class="form-label">NPSN</label>
                        <input type="text" name="npsn" class="form-input" value="{{ $sekolah->npsn }}" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="email" class="form-label">Email Sekolah</label>
                        <input type="email" name="email" class="form-input" placeholder="Masukkan email sekolah" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" name="alamat_lengkap" class="form-input" placeholder="Masukkan alamat lengkap" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="telepon_sekolah" class="form-label">Telepon Sekolah</label>
                        <input type="text" name="telepon_sekolah" class="form-input" placeholder="Masukkan telepon sekolah" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="jenjang_pendidikan" class="form-label">Jenjang Pendidikan</label>
                        <input type="text" name="jenjang_pendidikan" class="form-input" placeholder="Masukkan jenjang pendidikan" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="kepala_sekolah" class="form-label">Kepala Sekolah</label>
                        <input type="text" name="kepala_sekolah" class="form-input" placeholder="Masukkan kepala sekolah" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="status_sekolah" class="form-label">Status Sekolah</label>
                        <input type="text" name="status_sekolah" class="form-input" placeholder="Masukkan status sekolah" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="jumlah_guru" class="form-label">Jumlah Guru</label>
                        <input type="number" name="jumlah_guru" class="form-input" placeholder="Masukkan jumlah guru" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                        <input type="number" name="jumlah_siswa" class="form-input" placeholder="Masukkan jumlah siswa" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                        <input type="number" name="tahun_berdiri" class="form-input" placeholder="Masukkan tahun berdiri" />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="foto_sekolah" class="form-label">Foto Sekolah</label>
                        <input type="file" name="foto_sekolah" class="form-input" accept=".jpg, .png, .jpeg" />
                        <img src="{{ url("public/$sekolah->foto_sekolah") }}" style="width: 50%; border-radius: 4%">
                    </div>

                    <div class="form-label-wrapper">
                        <label for="logo_sekolah" class="form-label">Logo Sekolah</label>
                        <input type="file" name="logo_sekolah" class="form-input" accept=".jpg, .png, .jpeg" />
                        <img src="{{ url("public/$sekolah->logo_sekolah") }}" style="width: 50%; border-radius: 4%">
                    </div>

                    <button type="submit" class="primary-default-btn form-btn">Tambah Sekolah</button>
                </div>
            </form>
            {{-- form end --}}
        </div>
    </main>
</x-master-admin>
