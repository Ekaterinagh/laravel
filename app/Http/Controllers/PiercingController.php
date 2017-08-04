<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Piercing;
use App\Salons;

class PiercingController extends Controller
{
    public function getindex(){
        $all=Piercing::all();
        return view('piercing')->with('piercing',$all);
    }
    public function getOrder($id=NULL){
        $pierc=Piercing::find($id);
        $salons=Salons::all();
        return view('pierc')->with('pierc',$pierc)->with('salons',$salons);
    }
}
