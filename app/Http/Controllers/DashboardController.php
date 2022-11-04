<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $compn=Auth::User()->company;
        $name=Auth::User()->name;
        $role=Auth::User()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;
        $image=Auth::user()->file;
        return view('dashboard', compact('image', 'compn', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin'));
        
    
    }

}
