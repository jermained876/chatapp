<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Session;
use App\User;
use Faker\Provider\UserAgent;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return UserResource::collection(User::all());
        return view('home');
       //return UserResource::collection(User::all());
      //return Session
    }

    public function getFriends()
    {
        return UserResource::collection(User::where('id','!=',auth()->id())->get());
      // return "123";
    }

    public function test()
    {
        return UserResource::collection(User::where('id','!=',auth()->id())->get());
     //  return "123";
    }

}
