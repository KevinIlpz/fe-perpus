@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Add Visi, Misi, and Moto</h2>

    <form action="/admin/visimisi" method="POST" class="space-y-4">
        @csrf

        <div class="space-y-2">
            <label for="visi" class="block text-gray-600 font-semibold">Visi</label>
            <textarea id="visi" name="visi" rows="4" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter vision"></textarea>
        </div>

        <div class="space-y-2">
            <label for="misi" class="block text-gray-600 font-semibold">Misi</label>
            <textarea id="misi" name="misi" rows="4" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter mission"></textarea>
        </div>

        <div class="space-y-2">
            <label for="motto" class="block text-gray-600 font-semibold">Motto</label>
            <textarea id="motto" name="motto" rows="4" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter motto"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded mt-4">Save</button>
    </form>
</div>
@endsection
