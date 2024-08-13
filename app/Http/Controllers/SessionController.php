<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        //validate
        $attrbs = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //attempt to login the user
        if(! Auth::attempt($attrbs)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, Those credintials do not match'
            ]);
        }

        //regenerate the session
        request()->session()->regenerate();

        //redirect
        return redirect('/');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
