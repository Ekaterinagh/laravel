<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Piercing;
use App\Http\Requests\CreatePiercingRequest;
use App\Http\Requests\UpdatePiercingRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class PiercingController extends Controller {

	/**
	 * Display a listing of piercing
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $piercing = Piercing::all();

		return view('admin.piercing.index', compact('piercing'));
	}

	/**
	 * Show the form for creating a new piercing
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.piercing.create');
	}

	/**
	 * Store a newly created piercing in storage.
	 *
     * @param CreatePiercingRequest|Request $request
	 */
	public function store(CreatePiercingRequest $request)
	{
	    $request = $this->saveFiles($request);
		Piercing::create($request->all());

		return redirect()->route(config('quickadmin.route').'.piercing.index');
	}

	/**
	 * Show the form for editing the specified piercing.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$piercing = Piercing::find($id);
	    
	    
		return view('admin.piercing.edit', compact('piercing'));
	}

	/**
	 * Update the specified piercing in storage.
     * @param UpdatePiercingRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePiercingRequest $request)
	{
		$piercing = Piercing::findOrFail($id);

        $request = $this->saveFiles($request);

		$piercing->update($request->all());

		return redirect()->route(config('quickadmin.route').'.piercing.index');
	}

	/**
	 * Remove the specified piercing from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Piercing::destroy($id);

		return redirect()->route(config('quickadmin.route').'.piercing.index');
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
            Piercing::destroy($toDelete);
        } else {
            Piercing::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.piercing.index');
    }

}
