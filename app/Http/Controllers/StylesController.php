<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Styles;
use App\Salons;

class StylesController extends Controller
{
    public function getindex(){
        $all=Styles::all();
        return view('styles')->with('styles',$all);
    }
    public function getOrder($id=NULL){
        $style=Styles::find($id);
        $salons=Salons::all();
        return view('order')->with('style',$style)->with('salons',$salons);
    }
}
