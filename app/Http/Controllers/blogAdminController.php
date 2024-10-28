<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogAdminController extends Controller
{
    public function index()
    {
        return view('admin.blog');
    }

    public function create()
    {
        return view('admin.blog.create');
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
        return view('admin.blog.edit');
    }
}
