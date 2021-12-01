<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\County;
use App\Models\Currency;
use App\Models\Industry;
use App\Models\Job;
use App\Models\JobAttachment;
use App\Models\JobEducationLevel;
use App\Models\JobSelectedIndustry;
use App\Models\JobSelectedSkill;
use App\Models\JobType;
use App\Models\Payment_mode;
use App\Models\SalaryRange;
use App\Models\Town;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class JobController extends Controller
{


    public function index()
    {

        return view('jobs.index')->with([
            'user_details' => UserDetail::getUserByID(Auth::user()->id),
            'user_posted_jobs' => Job::getJobsByUserID(Auth::user()->id)->paginate(1),


        ]);
    }


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
            //'select_skills' => 'required',
            'county' => 'required',
            'town_estate' => 'required',
            'payment_type' => 'required',
            'post_as' => 'required',
        ]);


        $task = new Job();
        $task->user_id = Auth::user()->id;
        $task->post_type = $request->input('post_type');
        $task->job_title = $request->input('title');
        $task->job_description = $request->input('description');
        $task->job_county_id = $request->input('county');
        $task->job_town_id = $request->input('town_estate');
        $task->job_address = $request->input('address');
        $task->payment_type = $request->input('payment_type');
        $task->salary_range_id = $request->input('salary_range');
        $task->salary_amount = $request->input('custom_amount');
        $task->currency_id = $request->input('payment_curency');
        $task->payment_mode_id = $request->input('payment_mode');
        $task->posting_as = $request->input('post_as');
        $task->display_name = $request->input('display_name');
        $task->applications_email = $request->input('notification_email');

        $task->job_summary = $request->input('job_summary');
        $task->job_type = $request->input('job_type');
        $task->job_qualification_id = $request->input('minimum_requirement');
        $task->job_openings = $request->input('opennings');
        $task->deadline =  Carbon::parse($request->input('deadline'))->format("Y-m-d");

        $task->created_by = Auth::user()->id;
        $task->updated_by = Auth::user()->id;

        if ($request->hasFile('business_logo') && $request->file('business_logo')->isValid()) {
            $logo_file = $request->file('business_logo');
            $file_name = Str::random(30) . '.' . $logo_file->getClientOriginalExtension();
            $logo_file->move('business_logo/', $file_name);
            $task->company_logo = 'business_logo/' . $file_name;
        }


        $task->save();


        foreach ($request->input('industries') as $industry) {
            JobSelectedIndustry::insert([
                'job_id' => $task->id,
                'industry_id' => $industry,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }


        if (!empty($request->input('job_skills'))) {
            foreach (json_decode($request->input('job_skills')) as $skill) {
                JobSelectedSkill::insert([
                    'job_id' => $task->id,
                    'skill_id' => $skill->skill_id,
                    'skill_name' => $skill->skill_name,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString(),
                ]);
            }
        }


        if (!empty($request->input('attachment_file'))) {
            foreach (json_decode($request->input('attachment_file')) as $file) {
                JobAttachment::insert([
                    'job_id' => $task->id,
                    'attachment_type' => $file->type,
                    'job_attachments_upload' => $file->file,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString(),
                ]);
            }
        }


        return redirect('/job/');
    }



    public function post_job()
    {
        return view('jobs.post_job')->with([
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
        $uploadDir = $_SERVER["DOCUMENT_ROOT"] . '/job_attachments';



        if (!empty($_FILES)) {
            $tmpFile = $_FILES['file']['tmp_name'];
            $file_name = time() . '_' . $_FILES['file']['name'];
            $upload_path = $uploadDir . '/' . $file_name;

            move_uploaded_file($tmpFile, $upload_path);

            echo 'job_attachments/' . $file_name;

            // header('Content-type: application/json');
            // echo json_encode([
            //     //'status' => 'OK',  // Not required, but maybe useful
            //     'file_named'  => $filename,
            //     'type'  => $_FILES['file']['type'],
            // ]);
        }
    }
}
