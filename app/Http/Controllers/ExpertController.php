<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Industry;
use App\Models\Portfolio;
use App\Models\UserDetail;
use App\Models\UserSelectedIndustry;
use App\Models\UserSelectedSkill;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpertController extends Controller
{
    public function show($slug)
    {


        $user_id = UserDetail::where('slug', $slug)->first()->user_id;
        return view('expert.show')->with([
            'user_details' => (!empty(Auth::user()->id)) ? UserDetail::getUserByID(Auth::user()->id) : [],
            'user_profile_details' => UserDetail::getUserByID($user_id),
            'user_selected_industries' => UserSelectedIndustry::leftJoin('industries', 'user_selected_industries.industry_id', '=', 'industries.id')
                ->where('user_id',  $user_id)
                ->pluck('industry_name', 'industries.id'),
            'user_selected_industries_array' => UserSelectedIndustry::where('user_id',  $user_id)->pluck('industry_id')->toArray(),
            'user_selected_skills' => UserSelectedSkill::leftJoin('skills', 'user_selected_skills.skill_id', '=', 'skills.id')
                ->where('user_id', $user_id)
                ->get(),
            'user_educations' => Education::leftJoin('job_education_levels', 'education.qualification', '=', 'job_education_levels.id')
                ->where('education.user_id', $user_id)
                ->get([
                    'education.*',
                    'job_education_levels.education_level_name',
                ]),
            'user_work_experiences' => WorkExperience::leftJoin('job_types', 'work_experiences.employment_type', '=', 'job_types.id')
                ->where('work_experiences.user_id', $user_id)
                ->get([
                    'work_experiences.*',
                    'job_types.job_type_name',
                ]),
            'user_portfolio' => Portfolio::getUserPortfolio($user_id),
            'industries' => Industry::where('active', 1)->pluck('industry_name', 'id'),
        ]);
    }
}
