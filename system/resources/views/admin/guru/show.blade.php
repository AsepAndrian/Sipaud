<x-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <div class="form">
                <h2 class="main-title">Detail Data Guru</h2>

                <div class="form-label-wrapper">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-input" value="{{ $guru->username }}" readonly />
                </div>

                <div class="form-label-wrapper">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="username" class="form-input" value="{{ $guru->nama }}" readonly />
                </div>
                

                <div class="form-label-wrapper">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="number" name="nip" class="form-input" value="{{ $guru->nip }}" readonly />
                </div>

                <div class="form-label-wrapper">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-input" value="{{ $guru->jenis_kelamin }}"
                        readonly />
                </div>
                <tr>
                    <td style="font-weight: bold; padding: 10px; border: 1px solid #ddd;">Agama</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $guru->agama }}</td>
                </tr>]
                <div class="form-label-wrapper">
                    <label for="tempat_lahir" class="form-label">tempat_lahir</label>
                    <input type="text" name="tempat_lahir" class="form-input" value="{{ $guru->tempat_lahir }}"
                        readonly />
                </div>

                <div class="form-label-wrapper">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" name="tanggal_lahir" class="form-input" value="{{ $guru->tanggal_lahir }}"
                        readonly />
                </div>

                <div class="form-label-wrapper">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-input" value="{{ $guru->alamat }}" readonly />
                </div>

                <div class="form-label-wrapper">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-input" value="{{ $guru->email }}" readonly />
                </div>

                <div class="form-label-wrapper">
                    <label for="foto" class="form-label">Foto Profil</label>
                    <img src="{{ url('public/' . $guru->foto) }}" alt="{{ $guru->username }}"
                        style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover;"
                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                </div>

                <a href="{{ url('admin/guru') }}" class="primary-default-btn form-btn" style="margin-top: 20px;">Kembali</a>
            </div>
        </div>
    </main>
</x-admin>
