@extends('layouts.app')

@section('content')
<div class="bg-white text-gray-800 p-6 rounded-lg shadow-lg w-full">
    <h2 class="text-3xl font-bold mb-4">Add User</h2>

    <form action="/admin/users" method="POST" class="space-y-4">
        @csrf

        <div class="space-y-2">
            <label for="username" class="block text-gray-600 font-semibold">Username*</label>
            <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter username">
        </div>

        <div class="space-y-2">
            <label for="password" class="block text-gray-600 font-semibold">Password*</label>
            <input type="text" id="password" name="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter password">
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded mt-4">Save</button>
    </form>
</div>
@endsection
