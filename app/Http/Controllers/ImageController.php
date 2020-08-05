<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('images.index');
    }

    public function show($id)
    {
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
