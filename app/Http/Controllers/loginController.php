<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    //
    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
           return redirect('menu');//->intended(route('menu'));
         //   return 'entraste';
        }else
        {
            return redirect('login');
        }
    }

    //
    public function logout(Request $request){
        Auth::logout(); //cerrar sesion

        $request->session()->invalidate(); //resetear sesion
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
