<?php

	namespace App\Http\Controllers;

	use App\User;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Auth; 
	use DB;
	use Session;

	class UserController extends Controller
	{
	public function __construct()
	{
		$this->middleware('auth');
	}

	// View the currently logged in user's profile
	function view_me () {
		return redirect('user/' . Auth::user()->id);
	}

	// View a specific user
	function view ($user_id) {
		$user = Auth::user();
		$is_me = $user_id == $user->id;
		if (!$is_me) {
			# Right let's check if we can view first
			$has_connection = DB::table('connection')
				->where('owner_id', $user->id)
				->where('target_id', $user_id)
				->first();
			if ($has_connection) {
				# We need to load a different user
				$user = DB::table('users')->where('id', $user_id)->first();	
			} else {
				Session::flash("message", "You cannot view this user");
				Session::flash("message_class", "error");
				$user=NULL;
			}
		}
		
		if ($user) {
			return view('user/view', [
				'user'=>$user,
				'is_me'=>$is_me
			]);	
		}
		return redirect('user');
	}

	function save (Request $request) {
		$user = Auth::user();
		$user->name = $request->input('name');
		$user->description = $request->input('description');
		$user->phone = $request->input('phone');
		$user->occupation = $request->input('occupation');
		$user->save();
		return redirect('user');
	}

	function connections_view () {
		$user = Auth::user();
		$connections = DB::table('connection')
						->join('users', 'users.id', '=', 'connection.target_id')
						->join('event_company', 'event_company.id', '=', 'connection.event_company_id')
						->selectRaw('event_company.name as event_name, users.name as user_name, connection.event_company_id, connection.target_id, users.id as user_id, connection.created_at as connection_created_at, users.email as email, users.phone as phone')
						->where('connection.owner_id', $user->id)
						->orderBy('connection_created_at', 'desc')
						->orderBy('user_name', 'desc')
						->groupBy('target_id')
						->get();
		return view('user/connections', [
				'user'=>$user,
				'connections'=>$connections
			]);
	}

}