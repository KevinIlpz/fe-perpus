@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Previous</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded">1</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded">2</button>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
                </div>
                <div>
                    <button onclick="window.location.href='/admin/create-profil'" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Add
                    </button>
                </div>
            </header>

            <!-- Content Table -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-4">
                <table class="w-full bg-white shadow-md rounded">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">No</th>
                            <th class="py-3 px-6 text-left">Judul Profil</th>
                            <th class="py-3 px-6 text-left">Isi Profil</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">Gambar</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">1</td>
                            <td class="py-3 px-6 text-left">Bro Jeki</td>
                            <td class="py-3 px-6 text-center">Lorem ipsum</td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Aktif</span>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <img src="{{ asset('images/mentahan.jpg') }}" alt="Content Image" class="w-auto h-auto mx-auto">
                            </td>
                            <td class="py-3 px-6 text-center">
                                <button onclick="toggleOptions(1)" class="bg-blue-500 text-white px-3 py-1 rounded text-xs">
                                    Lihat
                                </button>

                                <!-- Dropdown Opsi -->
                                <div id="options-1" class="hidden mt-2 space-y-2">
                                    <a href="{{ route('admin.edit-profil', 1) }}" class="block bg-gray-100 px-4 py-1 rounded hover:bg-blue-100">Edit</a>

                                    <button onclick="confirmDelete(1)"
                                            class="block bg-red-100 px-4 py-1 rounded hover:bg-red-200">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <script>
        function toggleOptions(id) {
            const element = document.getElementById(`options-${id}`);
            element.classList.toggle('hidden');
        }

        function confirmDelete(id) {
            const confirmed = confirm('Apakah Anda yakin ingin menghapus profil ini?');
            if (confirmed) {
                // Redirect ke endpoint delete sesuai ID
                window.location.href = `/profil/${id}/delete`; // Sesuaikan dengan endpoint penghapusan
            }
        }
    </script>
@endsection
