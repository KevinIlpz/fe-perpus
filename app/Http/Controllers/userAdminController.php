<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAdminController extends Controller
{
    public function index()
    {
        return view('admin.user');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }
}
