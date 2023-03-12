<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang as ModelsBarang;
use App\Models\kategori;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud-barang.index')->with([
            'dataBarang' => ModelsBarang::with('kategori')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = ModelsBarang::all();
        $kategori = kategori::get();
        return view('crud-barang.create', compact(['kategori', 'barang']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo json_encode($request->all()); die;
        $ValidatedData = $request->validate([
            'nama'=> 'required|min:5|max:50',
            'harga_awal'=> 'required|numeric',
            'tgl_input'=> 'required',
            'status_lelang'=> 'required',
            'id_kategori'=> 'required',
            'deskripsi'=> 'required|min:5|max:255',
            'foto'=> 'required|file',
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoBarang/', $request->file('foto')->getClientOriginalName());
            $ValidatedData['foto']=  $request->file('foto')->getClientOriginalName();
        };

        ModelsBarang::create($ValidatedData);
        // dd($ValidatedData);die;
        $request->session()->flash('msg', 'Barang lelang berhasil ditambahkan!');
        return redirect()->route('barang.index');
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
        $barang = ModelsBarang::where('id_barang', $id)->with('kategori')->first();
        $kategori = kategori::get();

        return view('crud-barang.edit', ['barang' => $barang, 'kategori' => $kategori]);
    }
       
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $ValidatedData = $request->validate([
            'nama'=> 'required|min:5|max:50',
            'harga_awal'=> 'required|numeric',
            'tgl_input'=> 'required',
            'status_lelang'=> 'required',
            'id_kategori'=> 'required',
            'deskripsi'=> 'required|min:5|max:255',
            'foto'=> 'file',
        ]);


        if($request->hasFile('foto')){
            file::delete(public_path('fotoBarang'). '/' . $request->foto);
            $request->file('foto')->move('fotoBarang/', $request->file('foto')->getClientOriginalName());
            $ValidatedData['foto']=  $request->file('foto')->getClientOriginalName();
        };
        $barang = ModelsBarang::findOrfail($id);
        $barang->where('id_barang', $barang->id_barang)->update($ValidatedData);

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = ModelsBarang::where('id_barang', $id)->first();
        file::delete(public_path('fotoBarang'). '/' . $barang->foto);

        ModelsBarang::where('id_barang', $barang->id_barang)->delete();
        session::flash('hps', 'Barang lelang berhasil dihapus!');
        return redirect()->route('barang.index');
    }
}
