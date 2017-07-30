<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    public function getIndex(){
        $serv=Services::all();
        return view('services',compact('serv'));
    }
}
