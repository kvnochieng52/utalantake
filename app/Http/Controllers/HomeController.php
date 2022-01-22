<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::check()) {
            return redirect('/profile');
        } else {
            return view('home.index');
        }
    }


    public function terms_and_conditions()
    {
        return view('home.terms_and_conditions');
    }

    public function contact_us()
    {
        return view('home.contact_us');
    }


    public function under_construction()
    {
        return view('home.under_construction');
    }
}
