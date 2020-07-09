<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HarianController extends Controller
{
	public function harian(Request $request)
	{
        if($request->has('cari')){
            $data_dataharian =\App\Dataharian::where('positif_harian','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_dataharian =\App\Dataharian::all();
        }
		$data_dataharian= \App\DataHarian::all();
		return view("pages.harian", ["data_dataharian" => $data_dataharian]);
	}

	public function create(Request $request)
	{

        \App\DataHarian::create($request->all());
        return redirect('/harian')->with('sukses','data berhasil ditambahkan');
	}

    public function edit($id)
    {
        $edit=\App\DataHarian::find($id);
        return view('pages/editharian', ['edit'=> $edit]);
    }

    public function update(Request $request, $id)
     {
         $edit = \App\DataHarian::find($id);
         $edit->update($request->all());
         return redirect('/harian')->with('sukses', 'Data berhasil di update');
     } 

     public function delete($id)
     {
        $delete =\App\DataHarian::find($id);
        $delete->delete();
        return redirect('/harian')->with('sukses','data berhasil dihapus');
     }
}

