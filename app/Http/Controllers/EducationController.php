<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function add_education(Request $request)
    {


        $this->validate($request, [
            'school_name' => 'required',
            'qualification' => 'required',
            'course_name' => 'required',
            'start_month' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'end_month' => 'required',
        ]);

        $education = new Education();
        $education->user_id = Auth::user()->id;
        $education->institute_name = $request->input('school_name');
        $education->qualification = $request->input('qualification');
        $education->course_name = $request->input('course_name');
        $education->start_date = Carbon::parse("01-" . $request->input('start_month') . "-" . $request->input('start_year'))->format("Y-m-01");
        $education->end_date = Carbon::parse("01-" . $request->input('end_month') . "-" . $request->input('end_year'))->format("Y-m-01");
        $education->description = $request->input('description');
        $education->created_by = Auth::user()->id;
        $education->updated_by = Auth::user()->id;
        $education->save();

        return back()->with('success', 'Education added successful');
    }
}
