<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Salons;
use App\Http\Requests\CreateSalonsRequest;
use App\Http\Requests\UpdateSalonsRequest;
use Illuminate\Http\Request;



class SalonsController extends Controller {

	/**
	 * Display a listing of salons
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $salons = Salons::all();

		return view('admin.salons.index', compact('salons'));
	}

	/**
	 * Show the form for creating a new salons
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.salons.create');
	}

	/**
	 * Store a newly created salons in storage.
	 *
     * @param CreateSalonsRequest|Request $request
	 */
	public function store(CreateSalonsRequest $request)
	{
	    
		Salons::create($request->all());

		return redirect()->route(config('quickadmin.route').'.salons.index');
	}

	/**
	 * Show the form for editing the specified salons.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$salons = Salons::find($id);
	    
	    
		return view('admin.salons.edit', compact('salons'));
	}

	/**
	 * Update the specified salons in storage.
     * @param UpdateSalonsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSalonsRequest $request)
	{
		$salons = Salons::findOrFail($id);

        

		$salons->update($request->all());

		return redirect()->route(config('quickadmin.route').'.salons.index');
	}

	/**
	 * Remove the specified salons from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Salons::destroy($id);

		return redirect()->route(config('quickadmin.route').'.salons.index');
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
            Salons::destroy($toDelete);
        } else {
            Salons::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.salons.index');
    }

}
