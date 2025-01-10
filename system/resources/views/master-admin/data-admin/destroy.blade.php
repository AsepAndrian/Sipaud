<x-master-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            {{-- form untuk hapus admin --}}
            <form action="{{ url('master-admin/data-admin') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE') <!-- Menambahkan method DELETE untuk penghapusan -->
                <div class="form">
                    <h2 class="main-title">Hapus Admin</h2>
                    <div class="form-label-wrapper">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-input" placeholder="Masukkan username admin yang akan dihapus" required oninvalid="this.setCustomValidity('Harap isi username dengan benar')" oninput="setCustomValidity('')" />
                        @error('username')
                            <div style="color: #00AD7C; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-label-wrapper">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="Masukkan email admin yang akan dihapus" required oninvalid="this.setCustomValidity('Harap isi email dengan benar')" oninput="setCustomValidity('')"  />
                        @error('email')
                            <div style="color: #00AD7C; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-label-wrapper">
                        <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
                        <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-input" placeholder="Masukkan sekolah asal admin" required oninvalid="this.setCustomValidity('Harap isi sekolah asal dengan benar')" oninput="setCustomValidity('')" />
                        @error('sekolah_asal')
                            <div style="color: #00AD7C; font-size: 12px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="primary-default-btn form-btn">Hapus Admin</button>
                </div>
            </form>
            {{-- form end --}}
        </div>
    </main>
</x-master-admin>
