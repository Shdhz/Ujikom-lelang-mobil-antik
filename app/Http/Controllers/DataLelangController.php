<?php

namespace App\Http\Controllers;

use App\Models\lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataLelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lelang = lelang::with('barang', 'user')->get();
        return view('data-lelang.index', compact('lelang'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lelang = lelang::where('id_lelang', $id)->with('barang', 'user')->first();
        return view('data-lelang.edit', ['lelang'=> $lelang]);
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

        $ValidatedData = $request->validate([
            'status'=> 'required',
        ]);

        $lelang = lelang::findOrfail($id);
        $lelang->where('id_lelang', $lelang->id_lelang)->update($ValidatedData);
        
        return redirect()->route('data-lelang.index')->with('msg', 'bidder data has been successfully modified.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lelang = lelang::find($id);
        $lelang->delete();

        return redirect()->route('data-lelang.index')->with('hps', 'bidder data has been successfully deleted.');
    }
}
