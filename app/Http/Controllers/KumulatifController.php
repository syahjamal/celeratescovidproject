<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KumulatifController extends Controller
{
    public function kumulatif()
    {
    	$data_kumulatif = \App\DataKumulatif::all();
    	return view('pages.kumulatif',['data_kumulatif'=> $data_kumulatif]);
    }

    public function create(Request $request)
    {
    	\App\DataKumulatif::create($request->all());
        return redirect('/kumulatif')->with('sukses','data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $edit=\App\DataKumulatif::find($id);
        return view('pages/editkumulatif', ['edit'=> $edit]);
    }

    public function update(Request $request, $id)
     {
         $edit = \App\DataKumulatif::find($id);
         $edit->update($request->all());
         return redirect('/kumulatif')->with('sukses', 'Data berhasil di update');
     } 

     public function delete($id)
     {
        $delete =\App\DataKumulatif::find($id);
        $delete->delete();
        return redirect('/kumulatif')->with('sukses','data berhasil dihapus');
     }
}
