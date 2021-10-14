<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use App\Models\Country;
use App\Models\County;
use App\Models\Gender;
use App\Models\Industry;
use App\Models\Skill;
use App\Models\Town;
use App\Models\UserDetail;
use App\Models\UserSelectedIndustry;
use App\Models\UserSelectedSkill;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class UserProfileController extends Controller
{
    public function index()
    {




        return view('profile.index')->with([
            'user_details' => UserDetail::getUserByID(Auth::user()->id),
            'genders' => Gender::where('visible', 1)->pluck('gender_name', 'id'),
            'countries' => Country::where('active', 1)->pluck('country_name', 'id'),
            'counties' => County::where('active', 1)->pluck('county_name', 'id'),
            'towns' => Town::where('active', 1)->pluck('town_name', 'id'),
            'industries' => Industry::where('active', 1)->pluck('industry_name', 'id'),
            'user_selected_industries' => UserSelectedIndustry::leftJoin('industries', 'user_selected_industries.industry_id', '=', 'industries.id')
                ->where('user_id', Auth::user()->id)
                ->pluck('industry_name', 'industries.id'),
            'user_selected_industries_array' => UserSelectedIndustry::where('user_id', Auth::user()->id)->pluck('industry_id')->toArray(),
            'user_selected_skills' => UserSelectedSkill::leftJoin('skills', 'user_selected_skills.skill_id', '=', 'skills.id')
                ->where('user_id', Auth::user()->id)
                ->get(),
        ]);
    }

    public function select_account_type()
    {
        return view('profile.select_account_type')->with([
            'FULL_ACCESS_AC_TYPE' => AccountType::FULL_ACCESS_AC_TYPE,
            'LIMITED_ACCESS_AC_TYPE' => AccountType::LIMITED_ACCESS_AC_TYPE,
            'user_details' => UserDetail::getUserByID(Auth::user()->id),
        ]);
    }
    public function select_acc_type_store(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->account_type = $request->input('account_type');
        $user->save();
        return redirect('/profile')->with('success', 'Details Saved Successfully...Please proceed to finish your profile');
    }


    public function edit()
    {
        return view('profile.edit')->with([
            'user_details' => UserDetail::getUserByID(Auth::user()->id),
            'genders' => Gender::where('visible', 1)->pluck('gender_name', 'id'),
            'countries' => Country::where('active', 1)->pluck('country_name', 'id'),
            'counties' => County::where('active', 1)->pluck('county_name', 'id'),
            'towns' => Town::where('active', 1)->pluck('town_name', 'id')
        ]);
    }


    public function upload_profile_photo(Request $request)
    {
        $this->validate($request, [
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('profile_photo');

        $thumbPath =  Str::random(30) . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath());

        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('/thumbnail') . '/' . $thumbPath);

        $profilePhotoPath = Str::random(30) . '.' . $image->getClientOriginalExtension();
        $img2 = Image::make($image->getRealPath());
        $img2->resize(500, 500, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('/profile_photo') . '/' . $profilePhotoPath);


        $user_details = UserDetail::where('user_id', Auth::user()->id)->first();
        $user_details->profile_photo_thumb = 'thumbnail/' . $thumbPath;
        $user_details->profile_photo = 'profile_photo/' . $profilePhotoPath;
        $user_details->updated_by = Auth::user()->id;
        $user_details->save();

        return back()->with('success', 'Image Uploaded successful');
    }


    public function update_basic_details(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
        ]);


        $user = User::find(Auth::user()->id);
        $user->name = $request->input('first_name') . " " . $request->input('last_name');
        $user->email = $request->input('email');
        $user->save();

        $user_details = UserDetail::where('user_id', Auth::user()->id)->first();
        $user_details->first_name = $request->input('first_name');
        $user_details->last_name = $request->input('last_name');
        $user_details->gender_id = $request->input('gender');
        $user_details->primary_phone = $request->input('telephone');
        $user_details->date_of_birth  = Carbon::parse($request->input('date_of_birth'))->format("Y-m-d");;
        $user_details->updated_by = Auth::user()->id;
        $user_details->save();

        return back()->with('success', 'Details saved successful');
    }


    public function update_bio(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'bio' => 'required',
        ]);

        $user_details = UserDetail::where('user_id', Auth::user()->id)->first();
        $user_details->title = $request->input('title');
        $user_details->bio = $request->input('bio');
        $user_details->updated_by = Auth::user()->id;
        $user_details->save();

        return back()->with('success', 'Details saved successful');
    }


    public function update_address(Request $request)
    {
        $this->validate($request, [
            'country' => 'required',
            'county' => 'required',
            'town_estate' => 'required',
            'address' => 'required',
        ]);

        $user_details = UserDetail::where('user_id', Auth::user()->id)->first();
        $user_details->country_id = $request->input('country');
        $user_details->county_id = $request->input('county');
        $user_details->town_id = $request->input('town_estate');
        $user_details->address = $request->input('address');
        $user_details->updated_by = Auth::user()->id;
        $user_details->save();

        return back()->with('success', 'Details saved successful');
    }


    public function update_industries(Request $request)
    {
        $this->validate($request, [
            'industries' => 'required',
        ]);

        UserSelectedIndustry::where('user_id', Auth::user()->id)->delete();
        foreach ($request->input('industries') as $industry) {
            UserSelectedIndustry::insert([
                'user_id' => Auth::user()->id,
                'industry_id' => $industry,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        return back()->with('success', 'Industries saved Successfully');
    }


    public function search_skills(Request $request)
    {

        return Skill::where('skill_name', 'ilike', '%' . $request->input('term') . '%')
            ->get(['skill_name AS value', 'id'])
            ->take(5);
    }

    public function add_skill(Request $request)
    {
        $this->validate($request, [
            'skill' => 'required',
        ]);

        $user_selected_skill = new UserSelectedSkill();
        $user_selected_skill->user_id = Auth::user()->id;
        $user_selected_skill->skill_id = $request->input('selected_skill_id');
        $user_selected_skill->description = $request->input('description');
        $user_selected_skill->selected_skill_name = $request->input('skill');
        $user_selected_skill->created_by = Auth::user()->id;
        $user_selected_skill->updated_by = Auth::user()->id;
        $user_selected_skill->save();

        return back()->with('success', 'Skill added Successfully');
    }
}
