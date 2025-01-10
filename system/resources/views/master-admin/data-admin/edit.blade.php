<x-master-admin>
    <div class="nav_deg" style="margin: 10px;">
        <div style="display: flex; justify-content: center; border-radius: 8px; align-items: center; width: 100%; height: 70px; background-color: #B0BEC5; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);">
            <h1 style="margin: 0; padding: 0 20px; text-align: center; font-size: 27px; color: white; font-weight: bold;">
                Edit Admin PAUD
            </h1>
        </div>
    </div>

    <main class="main users chart-page" id="skip-target" style="padding: 20px; display: flex; justify-content: center;">
        <div class="table-container" style="width: 100%; max-width: 1200px; background-color: #ffffff; border-radius: 12px; padding: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);">
            <p style="font-size: 16px; margin-bottom: 20px; color: #333; text-align: center;">
                ISI DAN SIMPAN PERUBAHAN DATA ADMIN
            </p>

            <form action="{{ url('master-admin/data-admin', $admin->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div style="margin-bottom: 20px;">
                    <label for="username" style="font-weight: bold;">Nama:</label>
                    <input type="text" id="username" name="username" value="{{ $admin->username }}" style="padding: 6px 12px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="email" style="font-weight: bold;">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $admin->email }}" style="padding: 6px 12px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="sekolah_asal" style="font-weight: bold;">Sekolah Asal:</label>
                    <input type="text" id="sekolah_asal" name="sekolah_asal" value="{{ $admin->sekolah_asal }}" style="padding: 6px 12px; width: 100%; border-radius: 5px; border: 1px solid #ddd;" required>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="password" style="font-weight: bold;">Password (Kosongkan jika tidak diubah):</label>
                    <input type="password" id="password" name="password" style="padding: 6px 12px; width: 100%; border-radius: 5px; border: 1px solid #ddd;">
                </div>

                <div style="text-align: center;">
                    <button type="submit" style="padding: 8px 12px; background-color: #4fb7e0; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </main>
</x-master-admin>