<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contacts;
use App\Salons;

class ContactController extends Controller
{
    public function getIndex(){
		$salons=Salons::all();
		//dd($salons);
		return view('contacts')->with('salons',$salons);
	}
	public function postIndex(ContactRequest $r){
		//dd($r->all());
		//$r['salons_id']=1;
		$r['types']='new';
		Contacts::create($r->all());
		return redirect('/contacts');
	}
}
