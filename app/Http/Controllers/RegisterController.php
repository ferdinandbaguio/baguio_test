<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
    public function create (Request $request) {
    	$data = $this->validate($request, [
        	
        	'idnumber' 			=> 'required',
	        // 'password'			=> 'required', 
	        'gender' 			=> 'required', 
	        'firstname' 		=> 'required',
	        'middlename'		=> 'required',
	        'lastname' 			=> 'required', 
	        'employmentStatus' 	=> 'required',
	        'role' 				=> 'required',
	        'status' 			=> 'required'
    	]);

    	User::create($data);
    }
}
