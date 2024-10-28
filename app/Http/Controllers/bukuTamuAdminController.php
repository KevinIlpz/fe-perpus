<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bukuTamuAdminController extends Controller
{
    public function index()
    {
        return view('admin.bukutamu');
    }

    public function create()
    {
        return view('admin.bukutamu.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        return view('admin.bukutamu.edit');
    }
}
