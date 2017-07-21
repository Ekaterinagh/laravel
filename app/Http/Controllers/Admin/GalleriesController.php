<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Galleries;
use App\Http\Requests\CreateGalleriesRequest;
use App\Http\Requests\UpdateGalleriesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Artists;
use App\Services;


class GalleriesController extends Controller {

	/**
	 * Display a listing of galleries
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $galleries = Galleries::with("artists")->with("services")->get();

		return view('admin.galleries.index', compact('galleries'));
	}

	/**
	 * Show the form for creating a new galleries
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $artists = Artists::pluck("name", "id")->prepend('Please select', null);
$services = Services::pluck("name", "id")->prepend('Please select', null);

	    
        $showhide = Galleries::$showhide;

	    return view('admin.galleries.create', compact("artists", "services", "showhide"));
	}

	/**
	 * Store a newly created galleries in storage.
	 *
     * @param CreateGalleriesRequest|Request $request
	 */
	public function store(CreateGalleriesRequest $request)
	{
	    $request = $this->saveFiles($request);
		Galleries::create($request->all());

		return redirect()->route(config('quickadmin.route').'.galleries.index');
	}

	/**
	 * Show the form for editing the specified galleries.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$galleries = Galleries::find($id);
	    $artists = Artists::pluck("name", "id")->prepend('Please select', null);
$services = Services::pluck("name", "id")->prepend('Please select', null);

	    
        $showhide = Galleries::$showhide;

		return view('admin.galleries.edit', compact('galleries', "artists", "services", "showhide"));
	}

	/**
	 * Update the specified galleries in storage.
     * @param UpdateGalleriesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateGalleriesRequest $request)
	{
		$galleries = Galleries::findOrFail($id);

        $request = $this->saveFiles($request);

		$galleries->update($request->all());

		return redirect()->route(config('quickadmin.route').'.galleries.index');
	}

	/**
	 * Remove the specified galleries from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Galleries::destroy($id);

		return redirect()->route(config('quickadmin.route').'.galleries.index');
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
            Galleries::destroy($toDelete);
        } else {
            Galleries::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.galleries.index');
    }

}
