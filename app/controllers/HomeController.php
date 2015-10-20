<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$category = DB::table('categories')->lists('name','id');
		//dd( Auth::user()->hasRole('user'));
		return View::make('home',array('category' => $category));
	}

	public function edit($id)
	{
	    $mymodel = MyModel::find($id);
	    return view('form')->with('mymodel', $mymodel);
	}

	public function startQuote()
	{
	   
	    Session::put('start_date', Input::get('start_date'));
	    Session::put('end_date', Input::get('end_date'));
	    Session::put('total_guests', Input::get('total_guests'));
	    Session::put('state', Input::get('state'));
	    Session::put('event_type', Input::get('category'));
	    Session::put('estimate', Input::get('sub_total'));
	  //  dd( Input::all());
	    return View::make('forms.event.event');

	}

	public function saveQuote(){
		
	}

	public function getStates()
	{
	   
	    $dropdowns = Dropdown::with('options')->get();
	    $options = InsuranceOption::where('type_id', '=', 1)->get();
	    $wedOptions = InsuranceOption::where('type_id', '=', 4)->get();
	    $states = DB::table('state')->get();
	    $category = DB::table('categories')->get();
	    $formData = array(
	    	'start_time' => Session::get('start_date'), 
	    	'end_time' => Session::get('end_date'),
	    	'guests' => Session::get('total_guests'),
	    	'state' => Session::get('state'),
	    	'estimate' => Session::get('estimate'),
	    	'eventtype' => Session::get('event_type'),
	    );
	    return Response::json(array('states'=> $states, 'cats' => $category, 'dataform'=>$formData, 'dropdowns'=> $dropdowns,'InsureOptions'=> $options,'WebOptions'=> $wedOptions));
	  	
	}

	public function getDropdowns()
	{
	   
	    $dropdowns = Dropdown::with('options')->get();
	    return Response::json(array('dropdowns'=> $dropdowns));
	  	
	}

	public function admin()
	{
	   
	  //  dd( Input::all());
	    return View::make('forms.event.customer',array('states'=> $states));
	}
}
