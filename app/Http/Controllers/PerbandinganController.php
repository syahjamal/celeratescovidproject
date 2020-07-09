<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerbandinganController extends Controller
{
    public function perbandingan()
    {
    	$data_perbandingan = \App\DataPerbandingan::all();
    	return view('pages.perbandingan',['data_perbandingan'=> $data_perbandingan]);
    }

    public function create(Request $request)
    {
    	\App\DataPerbandingan::create($request->all());
        return redirect('/perbandingan')->with('sukses','data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $edit=\App\DataPerbandingan::find($id);
        return view('pages/editperbandingan', ['edit'=> $edit]);
    }

    public function update(Request $request, $id)
     {
         $edit = \App\DataPerbandingan::find($id);
         $edit->update($request->all());
         return redirect('/perbandingan')->with('sukses', 'Data berhasil di update');
     } 

     public function delete($id)
     {
        $delete =\App\DataPerbandingan::find($id);
        $delete->delete();
        return redirect('/perbandingan')->with('sukses','data berhasil dihapus');
     }
}
