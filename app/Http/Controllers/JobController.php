<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\County;
use App\Models\Currency;
use App\Models\Industry;
use App\Models\Job;
use App\Models\JobEducationLevel;
use App\Models\JobType;
use App\Models\Payment_mode;
use App\Models\SalaryRange;
use App\Models\Town;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{


    public function start(Request $request)
    {
        return view('jobs.start')->with([
            'user_details' => UserDetail::getUserByID(Auth::user()->id),
            'TASK_CODE' => Job::TASK_CODE,
            'JOB_CODE' => Job::JOB_CODE,
        ]);
    }


    public function start_process(Request $request)
    {
        $this->validate($request, [
            'post_type' => 'required',
        ]);

        if ($request->input('post_type') == Job::TASK_CODE) {
            return redirect('/job/post_task');
        } else {
            return redirect('/job/post_job');
        }
    }


    public function post_task()
    {
        return view('jobs.post_task')->with([
            'user_details' => UserDetail::getUserByID(Auth::user()->id),
            'countries' => Country::where('active', 1)->pluck('country_name', 'id'),
            'counties' => County::where('active', 1)->pluck('county_name', 'id'),
            'towns' => Town::where('active', 1)->pluck('town_name', 'id'),
            'industries' => Industry::where('active', 1)->pluck('industry_name', 'id'),
            'salary_ranges' => SalaryRange::pluck('salary_range_description', 'id'),
            'currencies' => Currency::where('active', 1)->pluck('currency_name', 'id'),
            'payment_modes' => Payment_mode::where('active', 1)->pluck('payment_mode_name', 'id'),
            'job_types' => JobType::where('active', 1)->pluck('job_type_name', 'id'),
            'qualifications' => JobEducationLevel::where('active', 1)->pluck('education_level_name', 'id'),
        ]);
    }


    public function post_task_process(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'industries' => 'required',
            'select_skills' => 'required',
            'county' => 'required',
            'town_estate' => 'required',
            'payment_type' => 'required',
            'post_as' => 'required',
        ]);


        $task = new Job();
        $task->
    }





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
            'salary_ranges' => SalaryRange::pluck('salary_range_description', 'id'),
            'currencies' => Currency::where('active', 1)->pluck('currency_name', 'id'),
            'payment_modes' => Payment_mode::where('active', 1)->pluck('payment_mode_name', 'id'),
            'job_types' => JobType::where('active', 1)->pluck('job_type_name', 'id'),
            'qualifications' => JobEducationLevel::where('active', 1)->pluck('education_level_name', 'id'),
        ]);
    }

    public function save(Request $request)
    {
    }

    public function upload_attachments(Request $request)
    {
    }
}
