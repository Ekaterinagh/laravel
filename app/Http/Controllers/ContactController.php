<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;
use App\Salon;

class ContactController extends Controller
{
    public function getIndex(){
		$salons=Salon::all();
		//dd($salons);
		return view('contacts')->with('salons',$salons);
	}
	public function postIndex(ContactRequest $r){
		//dd($r->all());
		$r['salon']='ABA - Opera';
		$r['types']='new';
		Contact::create($r->all());
		return redirect('/contacts');
	}
}
