@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Edit Data</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf <!-- Token CSRF untuk keamanan -->

        <!-- Upload File -->
        <div class="space-y-2">
            <label for="file" class="block text-gray-600 font-semibold">Upload File*</label>
            <input type="file" id="file" name="file"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                accept="image/*, .pdf, .doc, .docx" required>
            <p class="text-sm text-gray-400">Format: JPG, PNG, PDF, DOC (max: 10 MB)</p>
        </div>

        <!-- Kategori -->
        <div class="space-y-2">
            <label for="kategori" class="block text-gray-600 font-semibold">Kategori*</label>
            <input type="text" id="kategori" name="kategori"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan kategori" required>
        </div>

        <!-- Keterangan -->
        <div class="space-y-2">
            <label for="keterangan" class="block text-gray-600 font-semibold">Keterangan*</label>
            <input type="text" id="keterangan" name="keterangan"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Masukkan keterangan" required>
        </div>

        <!-- Oleh -->
        <div class="space-y-2">
            <label for="oleh" class="block text-gray-600 font-semibold">Oleh*</label>
            <input type="text" id="oleh" name="oleh"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Nama penginput data" required>
        </div>

        <!-- Tanggal -->
        <div class="space-y-2">
            <label for="tanggal" class="block text-gray-600 font-semibold">Tanggal*</label>
            <input type="date" id="tanggal" name="tanggal"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit"
            class="bg-blue-500 text-white py-2 px-6 rounded mt-4 hover:bg-blue-600 transition">
            Save
        </button>
    </form>
</div>
@endsection
