<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     public function showLoginForm()
//     {
//         return view('login');
//     }

//     public function login(Request $request)
//     {
//         $credentials = $request->only('email', 'password');

//         if (Auth::attempt($credentials)) {
          
//             return redirect()->intended('/index');
//         }

//         return redirect()->back()->withErrors([
//             'email' => 'Invalid credentials',
//         ]);
//     }
// }