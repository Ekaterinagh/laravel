<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;

class BaseController extends Controller
{
    public function getIndex(){
		$text=Maintext::where('url','index')->first();
		return view('index')->with('text',$text);
	}
	public function getPage($id=NULL){
		if($id){
			$url=$id;
		}
		else{
			$url='index';
		}
		$text=Maintext::where('url',$url)->first();
		return view('index')->with('text',$text);
	}
}
