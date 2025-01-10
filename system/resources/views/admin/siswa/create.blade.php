<x-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Tambahkan Siswa</h2>
            <form action="{{ url('admin/siswa') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form">
                    <div class="form-label-wrapper">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-input" placeholder="Masukkan nama lengkap"
                            required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-input" placeholder="Masukkan nama lengkap"
                            required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" name="nisn" class="form-input" placeholder="Masukkan NISN" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="agama" class="form-label">Agama</label>
                        <select name="agama" class="form-input" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </div>
                    <div class="form-label-wrapper">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-input" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-label-wrapper">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-input" placeholder="Masukkan tempat lahir"
                            required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-input" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-input" placeholder="Masukkan alamat"
                            required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="status" class="form-label">Status Siswa</label>
                        <select name="status" class="form-input" required>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak aktif</option>
                        </select>
                    </div>
                    <div class="form-label-wrapper">
                        <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                        <input type="date" name="tahun_masuk" class="form-input" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="password" class="form-label">Kata sandi</label>
                        <input type="password" name="password" class="form-input" placeholder="Masukkan kata sandi"
                            required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="foto" class="form-label">Foto Profil</label>
                        <input type="file" name="foto" id="foto" class="form-input" accept="image/*" />
                        <p id="file-name" style="margin-top: 10px; color: #666; font-size: 14px;"></p>
                        <img id="preview-img" src="#" alt="Pratinjau Foto"
                            style="display: none; width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    </div>

                    <script>
                        // JavaScript untuk menampilkan pratinjau gambar dan nama file
                        document.getElementById('foto').addEventListener('change', function() {
                            const file = this.files[0];
                            const fileName = document.getElementById('file-name');
                            const previewImg = document.getElementById('preview-img');

                            if (file) {
                                // Validasi ukuran file
                                if (file.size > 2 * 1024 * 1024) { // 2 MB dalam byte
                                    fileName.textContent = 'File terlalu besar. Maksimal 2 MB.';
                                    previewImg.style.display = 'none';
                                    this.value = ''; // Reset input file
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
                                previewImg.style.display = 'none';
                            }
                        });
                    </script>

                    <button type="submit" class="primary-default-btn form-btn" style="margin-top: 20px;">Tambah
                        Siswa</button>
                </div>
            </form>
        </div>
    </main>
</x-admin>