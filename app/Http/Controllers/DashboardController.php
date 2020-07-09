<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $tanggal = DB::connection('pgsql')->table('dataharian')->select(DB::raw('tanggal, positif_harian, sembuh_harian, mati_harian'))->orderBy("created_at")->get();

        $categories=[];
        $posha=[];
        $semha=[];
        $matha=[];
        foreach($tanggal as $result){
                $categories[] = $result->tanggal;
                $posha[]=$result->positif_harian;
                $semha[]=$result->sembuh_harian;
                $matha[]=$result->mati_harian;
        }

        $tanggal1 = DB::connection('pgsql')->table('datakumulatif')->select(DB::raw('tanggal, positif_kumulatif, sembuh_kumulatif, mati_kumulatif'))->orderBy("created_at")->get();

        $categorieskum=[];
        $poskum=[];
        $semkum=[];
        $matkum=[];
        foreach ($tanggal1 as $result) {
            $categorieskum[]=$result->tanggal;
            $poskum[]=$result->positif_kumulatif;
            $semkum[]=$result->sembuh_kumulatif;
            $matkum[]=$result->mati_kumulatif;
        }

        /*dd($tanggal1);*/

        return view('dashboard.index', ['categories'=>$categories, 'posha'=>$posha, 'semha'=>$semha, 'matha'=>$matha], ['categorieskum'=>$categorieskum, 'poskum'=>$poskum, 'semkum'=>$semkum, 'matkum'=>$matkum]
        );
    }
}