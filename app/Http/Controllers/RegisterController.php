<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create (Request $request) {
    	$data = $this->validate($request, [
        	
        	'idnumber' 			=> 'required',
	        'password'			=> 'required', 
	        'gender' 			=> 'required', 
	        'firstname' 		=> 'required',
	        'middlename'		=> 'required',
	        'lastname' 			=> 'required', 
	        'description' 		=> 'required', 
	        'picture' 			=> 'required', 
	        'yearLevel' 		=> 'required', 
	        'role' 				=> 'required', 
	        'employmentStatus' 	=> 'required', 
	        'updateStatus' 		=> 'required', 
	        'position' 			=> 'required'
 
    	]);

    	User::create($data);
    }
}
