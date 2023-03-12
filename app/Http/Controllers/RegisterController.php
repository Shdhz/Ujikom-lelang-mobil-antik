<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    // controller register pembeli
    public function pembeli()
    {
        return view('auth.register-pembeli');
    }
    public function store(request $request)
    {
        $ValidatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'alamat' => 'nullable',
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5|max:255'
            ]);
                $ValidatedData['password'] = bcrypt($ValidatedData['password']);

                User::create($ValidatedData);
                $request->session()->flash('sukses', 'Registrasi sukses, silahkan login!');
                
                return redirect('login');
    }

    // Controller regist penjual
    public function penjual()
    {
        return view('auth.register-penjual');
    }
    public function store_penjual(request $request)
    {
        $Data = $request->validate(
            [
                'name' => 'required|max:255',
                'username' => ['required', 'min:3', 'max:255'],
                'alamat' => 'nullable',
                'role' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5|max:255'
            ]);

                $Data['password'] = bcrypt($Data['password']);
                User::create($Data); 
                
                $request->session()->flash('sukses', 'Registrasi sukses, silahkan login!');
                
                return redirect('login');
    }
}
