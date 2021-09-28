<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        echo "User Profile";
        exit;
    }

    public function select_account_type()
    {
        return view('profile.select_account_type');
    }
}
