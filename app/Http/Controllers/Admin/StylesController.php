<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Styles;
use App\Http\Requests\CreateStylesRequest;
use App\Http\Requests\UpdateStylesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class StylesController extends Controller {

	/**
	 * Display a listing of styles
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $styles = Styles::all();

		return view('admin.styles.index', compact('styles'));
	}

	/**
	 * Show the form for creating a new styles
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.styles.create');
	}

	/**
	 * Store a newly created styles in storage.
	 *
     * @param CreateStylesRequest|Request $request
	 */
	public function store(CreateStylesRequest $request)
	{
	    $request = $this->saveFiles($request);
		Styles::create($request->all());

		return redirect()->route(config('quickadmin.route').'.styles.index');
	}

	/**
	 * Show the form for editing the specified styles.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$styles = Styles::find($id);
	    
	    
		return view('admin.styles.edit', compact('styles'));
	}

	/**
	 * Update the specified styles in storage.
     * @param UpdateStylesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateStylesRequest $request)
	{
		$styles = Styles::findOrFail($id);

        $request = $this->saveFiles($request);

		$styles->update($request->all());

		return redirect()->route(config('quickadmin.route').'.styles.index');
	}

	/**
	 * Remove the specified styles from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Styles::destroy($id);

		return redirect()->route(config('quickadmin.route').'.styles.index');
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
            Styles::destroy($toDelete);
        } else {
            Styles::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.styles.index');
    }

}
