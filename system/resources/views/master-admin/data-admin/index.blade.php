<x-master-admin>
    <!-- Header Section -->
    <div class="nav_deg" style="margin: 10px;">
        <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 50px; background-color: #00AD7C; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15); border-radius: 8px;">
            <h1 style="margin: 0; padding: 0 10px; text-align: center; font-size: 20px; color: white;">
                Data Admin PAUD Kabupaten Ketapang
            </h1>
        </div>
    </div>

    <!-- Main Content Section -->
    <main class="main users chart-page" id="skip-target" style="padding: 20px; display: flex; justify-content: center;">
        <div class="table-container" style="width: 100%; max-width: 1200px; background-color: #ffffff; border-radius: 12px; padding: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);">
            
            <!-- Search and Add Button Section -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <!-- Add Admin Button -->
                <a href="{{ route('data-admin.create') }}" 
                   style="padding: 8px 12px; background-color: #00AD7C; color: white; text-decoration: none; border-radius: 5px; cursor: pointer; font-weight: bold; font-size: 14px;">
                    Tambah Data Admin
                </a>
                
                <!-- Search Form -->
                <form id="search-form" action="{{ url('master-admin/data-admin') }}" method="GET" style="display: inline-block;">
                    <input type="text" id="search" name="search" value="{{ request()->get('search') }}" placeholder="Cari Admin..." 
                           style="padding: 6px 12px; width: 250px; border-radius: 5px; border: 1px solid #ddd;">
                    <button type="submit" 
                            style="padding: 6px 12px; background-color: #4fb7e0; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                        Cari
                    </button>
                </form>
            </div>

            <!-- Success and Error Messages -->
            @if (session('success'))
                <div id="success-alert" style="padding: 10px; background-color: #4CAF50; color: white; position: relative; border-radius: 8px; margin-bottom: 15px;">
                    {{ session('success') }}
                    <span id="close-alert" style="position: absolute; top: 5px; right: 10px; cursor: pointer; font-weight: bold;">&times;</span>
                </div>
            @endif

            @if(session('error'))
                <div style="padding: 10px; background-color: #9ab0bd; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Success Alert Script -->
            <script>
                document.getElementById('close-alert').addEventListener('click', function() {
                    document.getElementById('success-alert').style.display = 'none';
                });
            </script>

            <!-- Table Section -->
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background-color: #747b7e; color: white;">
                            <th style="padding: 12px; text-align: left; font-weight: bold; border-radius: 4px 0 0 4px;">NO</th>
                            <th style="padding: 12px; text-align: left; font-weight: bold;">Nama</th>
                            <th style="padding: 12px; text-align: left; font-weight: bold;">Email</th>
                            <th style="padding: 12px; text-align: left; font-weight: bold;">Sekolah Asal</th>
                            <th style="padding: 12px; text-align: center; font-weight: bold; border-radius: 0 8px 8px 0;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_admin as $admin)
                            <tr style="background-color: #f8f8f8; transition: background-color 0.3s; border-bottom: 1px solid #ddd;">
                                <td style="padding: 12px;">{{ $loop->iteration }}</td>
                                <td style="padding: 12px;">{{ $admin->username }}</td>
                                <td style="padding: 12px;">{{ $admin->email }}</td>
                                <td style="padding: 12px;">{{ $admin->sekolah_asal }}</td>
                                <td style="padding: 12px; text-align: center;">
                                    <!-- Action Buttons -->
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <x-button.info-button url="master-admin/data-admin" id="{{ $admin->id }}" />
                                        <x-button.edit-button url="master-admin/data-admin" id="{{ $admin->id }}" />
                                        <x-button.delete-button url="master-admin/data-admin" id="{{ $admin->id }}" />
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination Section -->
            <div style="margin-top: 20px; display: flex; justify-content: center;">
                <ul style="display: flex; list-style: none; padding: 0; gap: 5px;">
                    <li>
                        <a href="{{ $list_admin->previousPageUrl() }}" 
                           style="padding: 4px 8px; border-radius: 5px; {{ $list_admin->onFirstPage() ? 'background-color: #ddd; color: #999; cursor: not-allowed;' : 'background-color: #4fb7e0; color: white;' }}">
                            &laquo; Sebelumnya
                        </a>
                    </li>
                    @foreach ($list_admin->getUrlRange(1, $list_admin->lastPage()) as $page => $url)
                        <li>
                            <a href="{{ $url }}" 
                               style="padding: 4px 8px; border-radius: 5px; {{ $page == $list_admin->currentPage() ? 'background-color: #4fb7e0; color: white;' : 'background-color: #e0e0e0; color: #333;' }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ $list_admin->nextPageUrl() }}" 
                           style="padding: 4px 8px; border-radius: 5px; {{ $list_admin->hasMorePages() ? 'background-color: #4fb7e0; color: white;' : 'background-color: #ddd; color: #999; cursor: not-allowed;' }}">
                            Berikutnya &raquo;
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</x-master-admin>
