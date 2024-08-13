<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        //validate
        $validatedAttributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6)->letters()->numbers()],
        ]);

        //create the user
        $user = User::create($validatedAttributes);
        //Employer::create($validatedAttributes);
        //log in
        Auth::login($user);

        //redirect
        return redirect('/');
    }
}
