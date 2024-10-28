@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Tambah Buku Tamu</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf <!-- Token CSRF untuk keamanan -->

        <!-- Tanggal -->
        <div class="space-y-2">
            <label for="tanggal" class="block text-gray-600 font-semibold">Tanggal*</label>
            <input type="date" id="tanggal" name="tanggal"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Nama -->
        <div class="space-y-2">
            <label for="nama" class="block text-gray-600 font-semibold">Nama*</label>
            <input type="text" id="nama" name="nama"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan nama Anda" required>
        </div>

        <!-- Email -->
        <div class="space-y-2">
            <label for="email" class="block text-gray-600 font-semibold">Email*</label>
            <input type="email" id="email" name="email"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan email Anda" required>
        </div>

        <!-- Pesan -->
        <div class="space-y-2">
            <label for="pesan" class="block text-gray-600 font-semibold">Pesan*</label>
            <textarea id="pesan" name="pesan" rows="6"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Tulis pesan Anda di sini..." required></textarea>
        </div>

        <!-- Tombol Submit -->
        <button type="submit"
            class="bg-blue-500 text-white py-2 px-6 rounded mt-4 hover:bg-blue-600 transition">
            Simpan
        </button>
    </form>
</div>
@endsection
