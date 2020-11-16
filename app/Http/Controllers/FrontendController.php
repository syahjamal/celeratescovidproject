<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function portofolio()
    {
        $model = DB::connection('pgsql')->table('data_model')->select(DB::raw('hari, s, i, r, d'))->orderBy("created_at")->get();
        
        // $model = DB::table('data_model')->select(DB::raw('hari', 's', 'i', 'r', ))->get();

        // $model = array("hari"=>"senin", "s"=>1, "i"=>2, "r"=>3, "d"=>4);

        $categoriesmod=[];
        $suspect=[];
        $ifected=[];
        $recover=[];
        $dead=[];
        foreach ($model as $result) {
            $categoriesmod[]=$result->hari;
            $suspect[]=$result->s;
            $infected[]=$result->i;
            $recover[]=$result->r;
            $dead[]=$result->d;
        }

        $data_perbandingan = \App\DataPerbandingan::all();

        /*dd($suspect);*/

        return view('frontend.model', ['data_perbandingan'=>$data_perbandingan, 'categoriesmod'=>$categoriesmod, 'suspect'=>$suspect, 'infected'=>$infected, 'recover'=>$recover, 'dead'=>$dead]
        );
    }

    
}

