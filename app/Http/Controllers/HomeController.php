<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User; //bringing the user model into the home controller


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() // constructor runs when the class in called
    {
        $this->middleware('auth'); // blocks everything in the dashboard (home) if the user is not authenticated
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id; //logged in user's ID
        $user = User::find($user_id); // user model and find by the user id
        return view('home')->with('posts', $user->posts); // return view with user posts as we have made the relationship for this
    }
}
