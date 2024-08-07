<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){

        $register = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        // Register
        $user           = new User;
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->password = $request->input('password');
        $newUser        = $user->save();

        // Login
        Auth::login($user);


        ////User::create($register);

        return redirect('/')->with('status', 'User created!');
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        //$remember = false;

        if(Auth::attempt($fields)){
            return redirect('/')->with('user', 'Eliezer');
        }else{
            return redirect('/login')->with('error', 'Wrong email or password');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
