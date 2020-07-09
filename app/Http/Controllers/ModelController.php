<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function model()
    {
    	$data_model = \App\DataModel::all();
    	return view('pages.model',['data_model'=> $data_model]);
    }

    public function create(Request $request)
    {
    	\App\DataModel::create($request->all());
        return redirect('/model')->with('sukses','data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $edit=\App\DataModel::find($id);
        return view('pages/editmodel', ['edit'=> $edit]);
    }

    public function update(Request $request, $id)
     {
         $edit = \App\DataModel::find($id);
         $edit->update($request->all());
         return redirect('/model')->with('sukses', 'Data berhasil di update');
     } 

     public function delete($id)
     {
        $delete =\App\DataModel::find($id);
        $delete->delete();
        return redirect('/model')->with('sukses','data berhasil dihapus');
     }
}
