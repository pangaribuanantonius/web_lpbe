<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function login(){
        return view('administrator.login'); // untuk login
    }

    public function ceklogin(Request $request){
        $login = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (\Auth::attempt($login)) {
            session(['username' => $request->username]);
            $user = \App\Models\User::where('username', session()->get('username'))->first();
            return redirect('/menu/index');
        }
        else{
            /*return redirect('/admin/login')->with('wrong', 'Username atau Password Salah');*/
            dd('user tidak ditemukan');
        }
    }

    public function logout(){
        session()->forget('username');
        return redirect(route('login'));
    }
}
