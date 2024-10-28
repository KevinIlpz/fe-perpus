@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Edit Profile</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="space-y-2">
            <label for="file" class="block text-gray-600 font-semibold">Upload File*</label>
            <input type="file" id="file" name="file"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                accept="image/*, .pdf, .doc, .docx" required>
            <p class="text-sm text-gray-400">Format: JPG, PNG, PDF, DOC (max: 10 MB)</p>
        </div>

        <div class="space-y-2">
            <label for="judul_profil" class="block text-gray-600 font-semibold">Profile Title*</label>
            <input type="text" id="judul_profil" name="judul_profil" value="" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter profile title">
        </div>

        <div class="space-y-2">
            <label for="isi_profil" class="block text-gray-600 font-semibold">Profile Content*</label>
            <textarea id="isi_profil" name="isi_profil" rows="5" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter profile content"></textarea>
        </div>

        <div class="space-y-2">
            <label for="status" class="block text-gray-600 font-semibold">Status*</label>
            <input type="text" id="status" name="status" value="" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter status">
        </div>

        <div class="space-y-2">
            <label for="gambar" class="block text-gray-600 font-semibold">Image*</label>
            <input type="file" id="gambar" name="gambar" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <div class="mt-2">
                    <p class="text-sm text-gray-600">Current Image:</p>
                    <img src="" alt="Current Profile Image" class="w-32 h-24 mt-2 rounded-lg">
                </div>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded mt-4">Update</button>
    </form>
</div>
@endsection
