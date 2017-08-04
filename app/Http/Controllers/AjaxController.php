<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Galleries;

class AjaxController extends Controller
{
    public function getGallery(){
        $pic_id=$_GET['id'];
        $picture=Galleries::find($pic_id);
        //$pic_prev_id=prev($pic_id);
        //$picture_prev=Galleries::find($pic_prev_id);
        return view('templates.ajax')->with('picture',$picture); //->with('picture',$picture_prev);
    }
}
