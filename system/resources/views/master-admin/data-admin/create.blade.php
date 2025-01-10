<x-master-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            {{-- form untuk data admin --}}
            <form action="{{ url('master-admin/data-admin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form">
                    <h2 class="main-title">Tambahkan Admin</h2>
                    <div class="form-label-wrapper">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-input" placeholder="Masukkan nama lengkap" required oninvalid="this.setCustomValidity('Harap isi username dengan benar')" oninput="setCustomValidity('')" />
                        @error('username')
                            <div style="color: #00AD7C; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-label-wrapper">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="Masukkan email" required oninvalid="this.setCustomValidity('Harap isi email dengan benar')" oninput="setCustomValidity('')"  />
                        @error('email')
                            <div style="color: #00AD7C; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-label-wrapper">
                        <label for="username" class="form-label">Sekolah Asal</label>
                        <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-input" placeholder="Masusukan sekolah asal" required oninvalid="this.setCustomValidity('harap isi sekolah dengan benar')" oninput="setCustomValidity('')" />
                        @error('sekolah_asal')
                            <div style="color: #00AD7C; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-label-wrapper">
                        <label for="password" class="form-label">Kata sandi</label>
                        <input type="password" id="password" name="password" class="form-input" placeholder="Masukkan sandi" required oninvalid="this.setCustomValidity('harap ini password dengan benar')" oninput="setCustomValidity('')"  />
                        @error('password')
                            <div style="color: #00AD7C; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="primary-default-btn form-btn">Tambah admin</button>
                </div>
            </form>
            {{-- form end --}}
        </div>
    </main>
</x-master-admin>