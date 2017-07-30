<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use App\Galleries;

class GalleryController extends Controller
{
   public function getIndex($id=1){
	   $gal=Galleries::where('showhide','show')->where('services_id',$id)->paginate(20);
	   $serv=Services::find($id);
	   return view('galleries',compact('gal','serv'));
   }
}
