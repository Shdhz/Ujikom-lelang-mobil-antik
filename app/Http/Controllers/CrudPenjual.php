<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class CrudPenjual extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPenjual = User::where('role', 'penjual')->orderBy('name', 'asc')->paginate(4);
        return view('crud-penjual.index', compact('dataPenjual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud-penjual.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data = $request->validate(
            [
                'name' => 'required|max:255',
                'username' => ['required', 'min:3', 'max:255'],
                'password' => 'required|min:5|max:255',
                'email' => 'required|email|unique:users',
                'alamat' => 'nullable',
                'role' => 'required'
                
            ]);

                $Data['password'] = bcrypt($Data['password']);
                User::create($Data); 

                $request->session()->flash('sukses', 'Seller data successfully added!');
                return view('crud-penjual.index');
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
        $Data = User::find($id);
        return view('crud-penjual.edit', compact('Data'));
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
        // echo json_encode($request->all()); die;
        
        $ValidatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'username' => ['required', 'min:3', 'max:255'],
                'password' => 'nullable',
                'email' => 'required|email|unique:users,email,'.$id,
                'alamat' => 'nullable',
                'role' => 'required'
                
            ]);
            if($request->password){
                // Belum beres
            };
            $ValidatedData['password'] = bcrypt($ValidatedData['password']);

            $Data = User::findOrfail($id);
            $Data->where('id', $Data->id)->update($ValidatedData);

            return redirect()->route('Seller-data.index')->with('edit', 'The sellers data has been successfully modified.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataPenjual = User::find($id);
        $dataPenjual->delete();

        session::flash('hps', 'Seller data successfully deleted!');
        return redirect()->route('Seller-data.index');
    }
}
