<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Contacts;
use App\Http\Requests\CreateContactsRequest;
use App\Http\Requests\UpdateContactsRequest;
use Illuminate\Http\Request;

use App\Salons;


class ContactsController extends Controller {

	/**
	 * Display a listing of contacts
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $contacts = Contacts::with("salons")->get();

		return view('admin.contacts.index', compact('contacts'));
	}

	/**
	 * Show the form for creating a new contacts
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $salons = Salons::pluck("id", "id")->prepend('Please select', null);

	    
	    return view('admin.contacts.create', compact("salons"));
	}

	/**
	 * Store a newly created contacts in storage.
	 *
     * @param CreateContactsRequest|Request $request
	 */
	public function store(CreateContactsRequest $request)
	{
	    
		Contacts::create($request->all());

		return redirect()->route(config('quickadmin.route').'.contacts.index');
	}

	/**
	 * Show the form for editing the specified contacts.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$contacts = Contacts::find($id);
	    $salons = Salons::pluck("id", "id")->prepend('Please select', null);

	    
		return view('admin.contacts.edit', compact('contacts', "salons"));
	}

	/**
	 * Update the specified contacts in storage.
     * @param UpdateContactsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateContactsRequest $request)
	{
		$contacts = Contacts::findOrFail($id);

        

		$contacts->update($request->all());

		return redirect()->route(config('quickadmin.route').'.contacts.index');
	}

	/**
	 * Remove the specified contacts from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Contacts::destroy($id);

		return redirect()->route(config('quickadmin.route').'.contacts.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Contacts::destroy($toDelete);
        } else {
            Contacts::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.contacts.index');
    }

}
