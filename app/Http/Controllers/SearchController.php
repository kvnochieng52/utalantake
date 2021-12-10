<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function expert()
    {
        return view('search.expert')->with([
            'user_details' => (!empty(Auth::user()->id)) ? UserDetail::getUserByID(Auth::user()->id) : [],
            'industries' => Industry::where('active', 1)->pluck('industry_name', 'id'),
        ]);
    }


    public function expert_process(Request $request)
    {
    }
}
