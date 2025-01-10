<x-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            {{-- form untuk mengedit data guru --}}
            <form action="{{ url('admin/guru', $guru->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form">
                    <h2 class="main-title">Edit Guru</h2>

                    <div class="form-label-wrapper">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-input" value="{{ $guru->username }}" required />
                    </div>


                    <div class="form-label-wrapper">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-input" value="{{ $guru->nama }}" required />
                    </div>

                    <div class="form-label-wrapper">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="number" name="nip" class="form-input" value="{{ $guru->nip }}" />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-input">
                            <option value="Laki-laki" {{ $guru->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $guru->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            <option value="Tidak Menyebutkan" {{ $guru->jenis_kelamin == 'Tidak Menyebutkan' ? 'selected' : '' }}>Tidak Menyebutkan</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="agama" style="font-weight: bold; display: block; margin-bottom: 8px;">Agama:</label>
                        <select name="agama" 
                            style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                            <option value="Islam" {{ $guru->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $guru->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $guru->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $guru->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ $guru->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghuchu" {{ $guru->agama == 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                        </select>
                    </div>
                    <div class="form-label-wrapper">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-input" value="{{ $guru->tempat_lahir }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-input" value="{{ $guru->tanggal_lahir }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-input" value="{{ $guru->alamat }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-input" value="{{ $guru->email }}" required />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="password" class="form-label">Kata sandi (Kosongkan jika tidak ingin mengubah)</label>
                        <input type="password" name="password" class="form-input" placeholder="Masukkan kata sandi" />
                    </div>
                    <div class="form-label-wrapper">
                        <label for="foto" class="form-label">Foto Profil</label>
                        <input type="file" name="foto" id="foto" class="form-input" accept="image/*" />
                        <p id="file-name" style="margin-top: 10px; color: #666; font-size: 14px;"></p>
                        <img id="preview-img" src="{{ url('public/' . $guru->foto) }}" alt="{{ $guru->username }}" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
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

                    <button type="submit" class="primary-default-btn form-btn" style="margin-top: 20px;">Perbarui Guru</button>
                </div>
            </form>
            {{-- form end --}}
        </div>
    </main>
</x-admin>
