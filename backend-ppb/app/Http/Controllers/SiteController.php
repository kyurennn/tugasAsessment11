<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function auth(Request $request)
    {
        $user = $request->em;
        $pass = $request->pwd;
        if (Auth::attempt([
            'email' => $user,
            'password' => $pass
        ])) {
            //berhasil login
            return redirect('/product');
        }
        //gagal login
        return redirect('/login')->with('message', 'Username / password salah');
    }
}
