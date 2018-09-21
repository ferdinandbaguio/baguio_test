<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->role;

        switch ($role) {
            case 'Student':
                return view('studenthome');
                break;
            case 'Alumni':
                return view('alumnihome');
                break;
            case 'Teacher':
                return view('teacherhome');
                break;
            case 'Coordinator':
                return view('coordinatorhome');
                break;
            case 'Chair':
                return view('chairhome');
                break;
            case 'Admin':
                return view('adminhome');
                break;
            
            default:
                return redirect('login');
                break;
        }
    }
}
