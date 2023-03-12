<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kategori;
use App\Models\lelang;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($keyword = $request->get('search')) {
            $barang = barang::where('nama', 'LIKE', "%$keyword%")->get();
        }else{
            $barang = barang::where('status_lelang', '!=' , 'done')->with('kategori', 'lelang')->get();
        }
        $barang_done = barang::where('status_lelang', 'done')->with('kategori', 'lelang')->get();
        return view('guest.guest', compact('barang_done', 'barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = barang::where('id_barang', $id)->with('kategori')->first();
        $kategori = kategori::get();
        $lelang = lelang::where('id_barang', $barang->id_barang )->get();

        return view('guest.showdetail', [
            'barang'=>$barang,
            'kategori'=>$kategori,
            'lelang'=>$lelang,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
