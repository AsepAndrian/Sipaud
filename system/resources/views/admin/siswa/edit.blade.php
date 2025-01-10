<x-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Edit Data Siswa</h2>
            <form action="{{ url('admin/siswa/' . $siswa->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form">
                    <div class="form-label-wrapper">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-input" placeholder="Masukkan nama lengkap" 
                            value="{{ $siswa->nama }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-input" placeholder="Masukkan username"
                            value="{{ $siswa->username }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" name="nisn" class="form-input" placeholder="Masukkan NISN"
                            value="{{ $siswa->nisn }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="agama" class="form-label">Agama</label>
                        <select name="agama" class="form-input" required>
                            <option value="Islam" {{ $siswa->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $siswa->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $siswa->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $siswa->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ $siswa->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghuchu" {{ $siswa->agama == 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                        </select>
                    </div>
                    <div class="form-label-wrapper">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-input" required>
                            <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-label-wrapper">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-input" placeholder="Masukkan tempat lahir"
                            value="{{ $siswa->tempat_lahir }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-input" 
                            value="{{ $siswa->tanggal_lahir }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-input" placeholder="Masukkan alamat"
                            value="{{ $siswa->alamat }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="status" class="form-label">Status Siswa</label>
                        <select name="status" class="form-input" required>
                            <option value="Aktif" {{ $siswa->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ $siswa->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-label-wrapper">
                        <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                        <input type="date" name="tahun_masuk" class="form-input" 
                            value="{{ $siswa->tahun_masuk }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="foto" class="form-label">Foto Profil</label>
                        <input type="file" name="foto" id="foto" class="form-input" accept="image/*" />
                        <p id="file-name" style="margin-top: 10px; color: #666; font-size: 14px;"></p>
                        <img id="preview-img" src="{{ asset('storage/foto/' . $siswa->foto) }}" alt="Pratinjau Foto"
                            style="display: block; width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    </div>

                    <script>
                        document.getElementById('foto').addEventListener('change', function() {
                            const file = this.files[0];
                            const fileName = document.getElementById('file-name');
                            const previewImg = document.getElementById('preview-img');

                            if (file) {
                                if (file.size > 2 * 1024 * 1024) {
                                    fileName.textContent = 'File terlalu besar. Maksimal 2 MB.';
                                    previewImg.style.display = 'none';
                                    this.value = '';
                                } else {
                                    fileName.textContent = file.name;

                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        previewImg.src = e.target.result;
                                        previewImg.style.display = 'block';
                                    };

                                    reader.readAsDataURL(file);
                                }
                            } else {
                                fileName.textContent = 'Belum ada gambar yang dipilih';
                                previewImg.src = "{{ asset('storage/foto/' . $siswa->foto) }}";
                            }
                        });
                    </script>

                    <button type="submit" class="primary-default-btn form-btn" style="margin-top: 20px;">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </main>
</x-admin>
