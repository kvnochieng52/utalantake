<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
{
    public function add_work_experience(Request $request)
    {

        $this->validate($request, [
            'company_name' => 'required',
            'title' => 'required',
            'employment_type' => 'required',
            'start_year' => 'required',
            'start_month' => 'required',
        ]);

        $work_experience = new WorkExperience();

        $work_experience->user_id = Auth::user()->id;
        $work_experience->company_name = $request->input('company_name');
        $work_experience->title = $request->input('title');
        $work_experience->employment_type = $request->input('employment_type');
        $work_experience->current = $request->input('current_check');
        $work_experience->start_date = Carbon::parse("01-" . $request->input('start_month') . "-" . $request->input('start_year'))->format("Y-m-01");
        $work_experience->end_date = !empty($request->input('end_month')) && !empty($request->input('end_year')) ? Carbon::parse("01-" . $request->input('end_month') . "-" . $request->input('end_year'))->format("Y-m-01") : null;
        $work_experience->role_description = $request->input('duties_responsibilities');
        $work_experience->created_by = Auth::user()->id;
        $work_experience->updated_by = Auth::user()->id;
        $work_experience->save();

        return back()->with('success', 'Work Experience added successful');
    }
}
