<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Admin Controller
	|--------------------------------------------------------------------------
	|
	*/

	public function index()
	{
		$users = User::with('roles', 'profile')->get();
		$roles = DB::table('roles')->lists('name','id');
		return View::make('admin',array('users' => $users,'roles' => $roles));
	}

    public function createUser()
    {
     
        $users = new User;
        $roles = DB::table('roles')->lists('name','id');
        $locations = DB::table('locations')->lists('name','id');
        return View::make('admin.createuser',array('user' => $users,'roles' => $roles,'locations' => $locations));
    }

 	public function editUser($id)
	{
		$users = User::with('roles', 'profile')->find($id);
		$roles = DB::table('roles')->lists('name','id');
		$locations = DB::table('locations')->lists('name','id');
		return View::make('admin.edituser',array('user' => $users,'roles' => $roles,'locations' => $locations));
	}
    public function updateUser($id)
    {
        $user = User::find($id);
        //$user->fill(Input::all());
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->password_confirmation = Input::get('password_confirmation');
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        $user->confirmed = 1;

        //update profile
        $profile = Profile::find($user->profile->id);
       // dd(Input::get('profile.location_id'));
		$profile->first_name = Input::get('profile.first_name');
		$profile->last_name = Input::get('profile.last_name');
		$profile->phone = Input::get('profile.phone');
		$profile->location_id = Input::get('profile.location_id');;
		$profile->save();

        if(! $user->update()) {
        	$error = $user->errors()->all(':message');
 			return Redirect::action('AdminController@editUser',array('id' => $id))
                ->withInput(Input::except('password'))
                ->with('error', $error);           
        } else {
            foreach ($user->roles as $role) {
            	$user->detachRole($role->id);# code...
            }
            
            $user->attachRole(Input::get('user_group'));
            return Redirect::action('AdminController@index')
                ->with('notice', Lang::get('confide::confide.alerts.account_created'));
        }
    }
    public function storeUser()
    {
        $repo = App::make('UserRepository');
        $user = $repo->signup(Input::all());

        $profile = new Profile();
		$profile->first_name = Input::get('first_name');
		$profile->last_name = Input::get('last_name');
		$profile->phone = Input::get('phone');
		$profile->location_id = 1;
		$user->profile()->save($profile);

        if ($user->id) {
        	$user->attachRole(Input::get('user_group'));
            if (Config::get('confide::signup_email')) {
                Mail::queueOn(
                    Config::get('confide::email_queue'),
                    Config::get('confide::email_account_confirmation'),
                    compact('user'),
                    function ($message) use ($user) {
                        $message
                            ->to($user->email, $user->username)
                            ->subject(Lang::get('confide::confide.email.account_confirmation.subject'));
                    }
                );
            }

            return Redirect::action('UsersController@login')
                ->with('notice', Lang::get('confide::confide.alerts.account_created'));
        } else {
            $error = $user->errors()->all(':message');

            return Redirect::action('AdminController@createUser')
                ->withInput(Input::except('password'))
                ->with('error', $error);
        }
    }

 	public function system()
	{
		$loc = Location::all();
		$options = InsuranceOption::all();
		$category = Category::paginate(15);
		$dropdown = Dropdown::all();
		return View::make('admin.system',array('location' => $loc,'options' => $options,'category' => $category, 'fields' => $dropdown));
	}


}