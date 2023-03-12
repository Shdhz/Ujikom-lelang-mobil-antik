<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        $user = Auth::User();
        if(Auth::User())
        {
            if($user->role == 'penjual'){
                return redirect()->intended('beranda-penjual');
            }elseif($user->role == 'admin'){
                return redirect()->intended('beranda-admin');
            }elseif($user->role == 'pembeli'){
                return redirect()->intended('beranda-pembeli');
            }
        }
        return view('auth.login');
    }
       // autentikasi login
       public function Authenticate(request $request)
       {
           $credentials = $request->validate([
               'email'=>['required', 'email:dns'],
               'password'=>['required']
           ]);
   
           if(Auth::attempt($credentials))
           {
               $request->session()->regenerate();
               $user = Auth::user();
   
               if($user->role == 'penjual'){
                   return redirect()->intended('beranda-penjual');
                }elseif($user->role == 'admin'){
                    return redirect()->intended('beranda-admin');
                }elseif($user->role == 'pembeli'){
                    return redirect()->intended('beranda-pembeli');
                }
               return redirect()->intended('Login');
           }
           
           return back()->with('LoginError', 'Login gagal!');
       }
       
    // controller logout
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('beranda');
    }
   
   
}
