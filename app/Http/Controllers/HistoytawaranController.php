<?php

namespace App\Http\Controllers;

use App\Models\lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoytawaranController extends Controller
{
    public function index(){
        $user = Auth::user();
        $lelang = lelang::where('id', $user->id,)->get();
        return view('main.kelola-lelang', compact('lelang'));
    }
}
