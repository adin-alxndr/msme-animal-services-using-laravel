<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('loginadmin'); 
    }
    public function login(Request $request)
    {
        $name = $request->request->get('name');
        $password = $request->request->get('password');

        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            $request->session()->put('timeout', now()->addMinutes(60));

            return redirect()->route('list_produk');
        } else {
            return redirect()->back()->withInput($request->only('name', 'password'))->withErrors([
                'error' => 'Username dan/atau Password salah',
            ]);
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login-admin');
    }
}
