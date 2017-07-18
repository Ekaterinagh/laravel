<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    public function getIndex(){
		return view('contacts');
	}
	public function postIndex(ContactRequest $r){
		//dd($r->all());
		$r['salon']='ABA - Opera';
		$r['types']='new';
		Contact::create($r->all());
		return redirect('/');
	}
}
