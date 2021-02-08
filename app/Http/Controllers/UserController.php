<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    public function index() {
    	$users = User::all();
    	// dd($users);
    	return view('users.index', compact('users'));
    }
    public function create() {    	
    	return view('users.create');
    }
    public function save(Request $request) {
    	// dd($request->all());
    	$user = new User();
    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->email = $request->email;
    	$user->mobile = $request->mobile;
    	$user->password = Hash::make($request->password);
    	$user->role_id = $request->role_id;

	     if($request->hasfile('profile_pic')){
	        $file = $request->file('profile_pic');
	        $extenstion = $file->getClientOriginalExtension();
	        $filename = time().'.'. $extenstion;
	        $file->move('user_image', $filename);
	        $profile_pic_path = "user_image/".$filename;
	        $user->profile_pic = $profile_pic_path; 
	    }
	    // dd($user->save());
	    if ($user->save()) {
	    	return redirect('/users')->with('success', 'User Submittted Successfully.');   
	    }
	    else {	    	
	    	return redirect('/users')->with('failure', 'Some Error');   
	    }	    

    }

    public function edit($user_id) {
    	$user = User::find($user_id);
    	return view('users.edit', compact('user'));    	
    }

    public function delete($user_id) {
    	$user = User::find($user_id);
    	if ($user->delete()) {
	    	return redirect('/users')->with('success', 'User Deleted Successfully.');   
    	}
    	else {    		
	    	return redirect('/users')->with('failure', 'Some Error Occured');   
    	}
	}

	public function update(Request $request, $user_id) {
    	// dd($request->all());

		$user = User::find($user_id);

    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->email = $request->email;
    	$user->mobile = $request->mobile;

	     if($request->hasfile('profile_pic')){
	        $file = $request->file('profile_pic');
	        $extenstion = $file->getClientOriginalExtension();
	        $filename = time().'.'. $extenstion;
	        $file->move('user_image', $filename);
	        $profile_pic_path = "user_image/".$filename;
	        $user->profile_pic = $profile_pic_path; 
	    }
	    // dd($user->save());
	    if ($user->save()) {
	    	return redirect('/users')->with('success', 'User Submittted Successfully.');   
	    }
	    else {	    	
	    	return redirect('/users')->with('failure', 'Some Error');   
	    }	    

	}

}
