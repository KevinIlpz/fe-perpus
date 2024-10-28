<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visimisiAdminController extends Controller
{
    public function index()
    {
        return view('admin.visimisi');
    }

    public function create()
    {
        return view('admin.visimisi.create');
    }

    public function edit()
    {
        return view('admin.visimisi.edit');
    }
}
