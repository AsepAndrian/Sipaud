<x-admin>
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            {{-- form untuk data admin --}}
            <form action="{{url('master-admin/admin')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <h2 class="main-title">Tambahkan Admin</h2>
                <div class="form-label-wrapper">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="username" class="form-input" placeholder="Masukkan nama lengkap" />
                </div>
                <div class="form-label-wrapper">
                    <label for="name" class="form-label">Email</label>
                    <input type="email" name="email" class="form-input" placeholder="Masukkan email" />
                </div>
                <div class="form-label-wrapper">
                    <label for="name" class="form-label">Kata sandi</label>
                    <input type="password" name="password" class="form-input" placeholder="Masukkan sandi" />
                </div>
                <button type="submit" class="primary-default-btn form-btn">Tambah admin</button>
            </div>
            </form>

            {{-- form end --}}
        </div>
    </main>
</x-admin>