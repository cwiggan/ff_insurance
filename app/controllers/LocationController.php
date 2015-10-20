<?php

class LocationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$loc = Location::all();
		return View::make('admin.locations',array('location' => $loc));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$loc = New Location;
		$loc->fill(Input::all());	
		return View::make('admin.newloc',array('location' => $loc));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(),array('name' => 'required'),array('name' => array('required', 'min:5')));
		$loc = new Location;
		$loc->fill(Input::all());

		if ($validator->fails()) {
			//return Redirect::action('AdminController@system');
            //return Redirect::action('AdminController@createUser')->with('error', $error);
            $error = $validator->messages();
            return Redirect::back()->withInput()->with('error', $error);
		}else{
			$loc->save();
			return Redirect::action('AdminController@system');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$loc = Location::find($id);
		return View::make('admin.editloc',array('location' => $loc));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$loc = Location::find($id);
		$loc->fill(Input::all());

		if ($loc->save()) {
			return Redirect::action('AdminController@system');
		}else{
			return Redirect::action('AdminController@system');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
