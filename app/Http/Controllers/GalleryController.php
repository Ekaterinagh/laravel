<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galleries;

class GalleryController extends Controller
{
   public function getIndex(){
	   $gal=Galleries::where('showhide','show')->paginate(20);
	   return view('galleries',compact('gal'));
   }
}
