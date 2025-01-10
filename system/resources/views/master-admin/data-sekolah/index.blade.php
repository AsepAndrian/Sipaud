<x-master-admin>
    <!-- Header -->
    <div class="nav_deg" style="margin: 10px;">
        <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 50px; background-color: #00AD7C; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15); border-radius: 8px;">
            <h1 style="margin: 0; padding: 0 10px; text-align: center; font-size: 20px; color: white;">
                Data Sekolah PAUD Kabupaten Ketapang
            </h1>
        </div>
    </div>

    <!-- Main Content -->
    <main class="main users chart-page" id="skip-target" style="padding: 20px; display: flex; justify-content: center;">
        <div class="table-container" style="width: 100%; max-width: 1200px; background-color: #ffffff; border-radius: 12px; padding: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);">

            <!-- Search and Add Button -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <!-- Add School Button -->
                <a href="{{ route('data-sekolah.create') }}" 
                   style="padding: 8px 12px; background-color: #00AD7C; color: white; text-decoration: none; border-radius: 5px; cursor: pointer; font-weight: bold; font-size: 14px;">
                   Tambah Data Sekolah
                </a>

                <!-- Search Form -->
                <!-- Form Pencarian -->
                <form id="search-form" action="{{ url('master-admin/data-sekolah') }}" method="GET" style="display: inline-block;">
                    <input type="text" id="search" name="search" value="{{ request()->get('search') }}" placeholder="Cari Sekolah..." 
                           style="padding: 6px 12px; width: 250px; border-radius: 5px; border: 1px solid #ddd;">
                    <button type="submit" style="padding: 6px 12px; background-color: #4fb7e0; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                        Cari
                    </button>
                </form>
            </div>

            <!-- Script untuk auto update dan kembali menampilkan semua data saat search dihapus -->
            <script>
                document.getElementById('search').addEventListener('input', function() {
                    var searchValue = this.value;
            
                    // Jika input kosong, hapus parameter search dari URL
                    if (searchValue === '') {
                        var form = document.getElementById('search-form');
                        form.submit();  // Submit form kosong untuk menampilkan semua data
                    }
                });
            </script>

            <!-- Success Notification -->
            @if (session('success'))
                <div id="success-alert" style="padding: 10px; background-color: #4CAF50; color: white; position: relative; border-radius: 8px; margin-bottom: 15px;">
                    {{ session('success') }}
                    <span id="close-alert" style="position: absolute; top: 5px; right: 10px; cursor: pointer; font-weight: bold;">&times;</span>
                </div>
                <script>
                    document.getElementById('close-alert').addEventListener('click', function() {
                        document.getElementById('success-alert').style.display = 'none';
                    });
                </script>
            @endif

            <!-- Table -->
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
                    <thead>
                        <tr style="background-color: #747b7e; color: white;">
                            <th style="padding: 8px; text-align: left;">NO</th>
                            <th style="padding: 8px; text-align: left;">Nama</th>
                            <th style="padding: 8px; text-align: left;">Email</th>
                            <th style="padding: 8px; text-align: left;">Alamat Lengkap</th>
                            <th style="padding: 8px; text-align: left;">Telepon Sekolah</th>
                            <th style="padding: 8px; text-align: left;">Kepala Sekolah</th>
                            <th style="padding: 8px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_sekolah as $sekolah)
                            <tr>
                                <td style="padding: 8px; text-align: left;">{{ $loop->iteration }}</td>
                                <td style="padding: 8px; text-align: left;">{{ $sekolah->nama_sekolah }}</td>
                                <td style="padding: 8px; text-align: left;">{{ $sekolah->email }}</td>
                                <td style="padding: 8px; text-align: left;">{{ $sekolah->alamat_lengkap }}</td>
                                <td style="padding: 8px; text-align: left;">{{ $sekolah->telepon_sekolah }}</td>
                                <td style="padding: 8px; text-align: left;">{{ $sekolah->kepalaq_sekolah }}</td>
                                <td style="padding: 8px; text-align: center;">
                                    <div style="display: flex; gap: 10px; justify-content: center;">
                                        <x-button.info-button url="master-admin/data-sekolah" id="{{ $sekolah->id }}" style="width: auto;" />
                                        <x-button.edit-button url="master-admin/data-sekolah" id="{{ $sekolah->id }}" style="width: auto;" />
                                        <x-button.delete-button url="master-admin/data-sekolah" id="{{ $sekolah->id }}" style="width: auto;" />
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div style="margin-top: 20px; display: flex; justify-content: center;">
                {{ $list_sekolah->links() }}
            </div>
        </div>
    </main>

    <!-- Responsive Styles -->
    <style>
        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
            th, td {
                padding: 6px;
            }
        }

        @media (max-width: 480px) {
            table {
                font-size: 10px;
            }
            th, td {
                padding: 4px;
            }
        }

        x-button.info-button, x-button.edit-button, x-button.delete-button {
            display: inline-block;
            text-align: center;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</x-master-admin>
