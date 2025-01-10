
<x-master-admin>
    <div class="nav_deg" style="margin: 10px;">
        <div
            style="display: flex; justify-content: center; align-items: center; width: 100%; height: 50px; background-color: #00AD7C; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15); border-radius: 8px;">
            <h1 style="margin: 0; padding: 0 10px; text-align: center; font-size: 20px; color: white;">
                Detail Data Admin PAUD  {{ $admin->nama_admin }}
            </h1>
        </div>
    </div>

    <main class="main users chart-page" id="skip-target" style="padding: 20px; display: flex; justify-content: center;">
        <div class="table-container"
            style="width: 100%; max-width: 800px; background-color: #ffffff; border-radius: 12px; padding: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);">
            
            <table style="width: 100%; border-collapse: collapse; font-size: 16px;">
                <tbody>
                    <tr>
                        <td style="padding: 10px; font-weight: bold;">Nama</td>
                        <td style="padding: 10px;">{{ $admin->username }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; font-weight: bold;">Email</td>
                        <td style="padding: 10px;">{{ $admin->email }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; font-weight: bold;">Sekolah Asal</td>
                        <td style="padding: 10px;">{{ $admin->sekolah_asal }}</td>
                    </tr>
                </tbody>
            </table>

            <div style="margin-top: 20px; text-align: center;">
                <a href="{{ url('master-admin/data-admin') }}" 
                   style="padding: 10px 20px; background-color: #4fb7e0; color: white; border-radius: 5px; text-decoration: none; font-weight: bold;">
                   Kembali
                </a>
            </div>
        </div>
    </main>
</x-master-admin>
