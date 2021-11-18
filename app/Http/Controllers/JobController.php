<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\County;
use App\Models\Industry;
use App\Models\Job;
use App\Models\Town;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function post(Request $request)
    {
        return view('jobs.post')->with([
            'user_details' => UserDetail::getUserByID(Auth::user()->id),
            'TASK_CODE' => Job::TASK_CODE,
            'JOB_CODE' => Job::JOB_CODE,
            'countries' => Country::where('active', 1)->pluck('country_name', 'id'),
            'counties' => County::where('active', 1)->pluck('county_name', 'id'),
            'towns' => Town::where('active', 1)->pluck('town_name', 'id'),
            'industries' => Industry::where('active', 1)->pluck('industry_name', 'id'),
        ]);
    }

    public function save(Request $request)
    {
    }

    public function upload_attachments(Request $request)
    {
    }
}
