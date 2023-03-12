<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // public function index(){
    //     return view('main.guest');
    // }

    public function info(){
        return view('main.informasi-lelang');
    }
}
