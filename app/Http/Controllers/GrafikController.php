<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    public function index()
    {
    	$model = DB::connection('pgsql')->table('data_model')->select(DB::raw('hari, s, i, r, d'))->orderBy("created_at")->get();

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

        /*dd($suspect);*/

        return view('dashboard.grafikmodel', ['categoriesmod'=>$categoriesmod, 'suspect'=>$suspect, 'infected'=>$infected, 'recover'=>$recover, 'dead'=>$dead]
        );
    }
}
