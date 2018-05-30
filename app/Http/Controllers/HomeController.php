<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Revision;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/home');
    }

    public function admin(Request $req){
    	 return view('/adminhome');
    }

    public function user(Request $req){
          ##$revisions = Revision::all();
          ##return view('/home', compact('revisions'));
          $revisions = Revision::all();
          return view('/home', compact('revisions'));
    }
}
