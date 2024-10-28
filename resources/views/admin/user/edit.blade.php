@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Edit User</h2>

    <form action="" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="space-y-2">
            <label for="username" class="block text-gray-600 font-semibold">Username*</label>
            <input type="text" id="username" name="username" value="" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter username">
        </div>

        <div class="space-y-2">
            <label for="password" class="block text-gray-600 font-semibold">Password*</label>
            <input type="text" id="password" name="password" value="" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter password">
            <p class="text-sm text-gray-500">Leave blank if you do not wish to change the password.</p>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded mt-4">Update</button>
    </form>
</div>
@endsection
