<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Artists;
use App\Http\Requests\CreateArtistsRequest;
use App\Http\Requests\UpdateArtistsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class ArtistsController extends Controller {

	/**
	 * Display a listing of artists
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $artists = Artists::all();

		return view('admin.artists.index', compact('artists'));
	}

	/**
	 * Show the form for creating a new artists
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
        $showhide = Artists::$showhide;

	    return view('admin.artists.create', compact("showhide"));
	}

	/**
	 * Store a newly created artists in storage.
	 *
     * @param CreateArtistsRequest|Request $request
	 */
	public function store(CreateArtistsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Artists::create($request->all());

		return redirect()->route(config('quickadmin.route').'.artists.index');
	}

	/**
	 * Show the form for editing the specified artists.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$artists = Artists::find($id);
	    
	    
        $showhide = Artists::$showhide;

		return view('admin.artists.edit', compact('artists', "showhide"));
	}

	/**
	 * Update the specified artists in storage.
     * @param UpdateArtistsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateArtistsRequest $request)
	{
		$artists = Artists::findOrFail($id);

        $request = $this->saveFiles($request);

		$artists->update($request->all());

		return redirect()->route(config('quickadmin.route').'.artists.index');
	}

	/**
	 * Remove the specified artists from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Artists::destroy($id);

		return redirect()->route(config('quickadmin.route').'.artists.index');
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
            Artists::destroy($toDelete);
        } else {
            Artists::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.artists.index');
    }

}
