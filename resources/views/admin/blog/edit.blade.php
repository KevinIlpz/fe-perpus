@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Edit Blog</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Judul Blog -->
        <div class="space-y-2">
            <label for="judul" class="block text-gray-600 font-semibold">Judul Blog*</label>
            <input type="text" id="judul" name="judul"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                value="" placeholder="Masukkan judul blog" required>
        </div>

        <!-- Isi Blog -->
        <div class="space-y-2">
            <label for="isi" class="block text-gray-600 font-semibold">Isi Blog*</label>
            <textarea id="isi" name="isi" rows="8"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                placeholder="Tulis konten blog di sini..." required></textarea>
        </div>

        <!-- Gambar -->
        <div class="space-y-2">
            <label for="gambar" class="block text-gray-600 font-semibold">Upload Gambar</label>
            <input type="file" id="gambar" name="gambar"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                accept="image/*">
            <p class="text-sm text-gray-400">Format gambar: JPG, PNG, GIF (max: 10 MB)</p>

                <div class="mt-4">
                    <p class="text-gray-600">Gambar Saat Ini:</p>
                    <img src="" alt="Gambar Blog" class="h-40 rounded">
                </div>
        </div>

        <!-- Status -->
        <div class="space-y-2">
            <label for="status" class="block text-gray-600 font-semibold">Status*</label>
            <select id="status" name="status"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                <option value="aktif" >Aktif</option>
                <option value="tidak aktif" >Tidak Aktif</option>
            </select>
        </div>

        <!-- Tombol Submit -->
        <button type="submit"
            class="bg-blue-500 text-white py-2 px-6 rounded mt-4 hover:bg-blue-600 transition">
            Update
        </button>
    </form>
</div>
@endsection
