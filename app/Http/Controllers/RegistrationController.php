<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        try {
            $this->validate(\request(), [
                'username' => 'required',
                'password' => 'required'
            ]);
        } catch (\Exception $exception) {
            \request()->session()->flash('error', $exception->getMessage());
        }

        $user = User::create(request(['username', 'password']));

        auth()->login($user);

        return redirect()->to('/images');
    }

}
