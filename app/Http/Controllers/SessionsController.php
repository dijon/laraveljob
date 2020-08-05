<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        if (auth()->attempt(request(['username', 'password'])) == false) {
            \request()->session()->flash('error', 'The username or password is incorrect, please try again');
            return back();
        }

        return redirect()->to('/images');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/images');
    }
}
