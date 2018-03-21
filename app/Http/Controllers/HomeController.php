<?php

namespace App\Http\Controllers;

use Chatkit\Laravel\ChatkitManager;
use Illuminate\Support\Facades\Auth;

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
    public function index(ChatkitManager $chatkit)
    {
        $users = \App\User::where('id', '!=', Auth::id())->get();
        return view('home', ['users' => $users]);
    }
}
