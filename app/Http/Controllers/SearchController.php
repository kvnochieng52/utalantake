<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\Industry;
use App\Models\Skill;
use App\Models\Town;
use App\Models\UserDetail;
use App\Models\UserSelectedSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function expert()
    {
        return view('search.expert')->with([
            'user_details' => (!empty(Auth::user()->id)) ? UserDetail::getUserByID(Auth::user()->id) : [],
            'industries' => Industry::where('active', 1)->pluck('industry_name', 'id'),
        ]);
    }
    public function location_autocomplete(Request $request)
    {

        $addresses = [];
        $towns = Town::where('town_name', 'ilike', '%' . $request->input('term') . '%')
            ->leftJoin('counties', 'towns.county_id', 'counties.id')
            ->get([DB::raw("concat(town_name,', ',county_name) AS value"), 'towns.id AS id'])
            ->take(5);

        foreach ($towns as $town) {
            $addresses[] = $town;
        }

        $counties = County::where('county_name', 'ilike', '%' . $request->input('term') . '%')
            ->get(['county_name as value',  'id'])
            ->take(5);

        foreach ($counties as $county) {
            $addresses[] = $county;
        }
        return $addresses;
    }







    public function expert_process(Request $request)
    {
        $this->validate($request, [
            'skills' => 'required',
        ]);


        $search_query = UserSelectedSkill::leftJoin('skills', 'user_selected_skills.skill_id', 'skills.id')
            ->leftJoin('user_details', 'user_selected_skills.user_id', 'user_details.user_id')
            ->leftJoin('counties', 'user_details.county_id', 'counties.id')
            ->leftJoin('towns', 'user_details.town_id', 'towns.id')
            ->leftJoin('user_selected_industries', 'user_details.user_id', 'user_selected_industries.user_id')
            ->where('skills.skill_name', 'ilike', '%' . $request->input('skills') . '%');


        if (!empty($request->input('location'))) {
            $search_query->where(function ($search_query) use ($request) {
                $search_query->where('counties.county_name', 'ilike', '%' .  $request->input('location') . '%')
                    ->orWhere('towns.town_name', 'ilike', '%' .  $request->input('location') . '%');
            });
        }

        if (!empty($request->input('industry'))) {
            $search_query->where('user_selected_industries.industry_id', $request->input('industry'));
        }


        $search_query->groupBy(
            'user_selected_skills.user_id',
            'user_details.id',
            'towns.town_name',
            'user_details.id',
            'user_details.first_name',
            'user_details.last_name',
            'user_details.profile_photo_thumb',
            'user_details.title',
            'user_details.bio',
            'user_details.slug'
        );
        $data = $search_query->get([
            'user_selected_skills.user_id',
            'user_details.id',
            'towns.town_name',
            'user_details.first_name',
            'user_details.last_name',
            'user_details.profile_photo_thumb',
            'user_details.title',
            'user_details.bio',
            'user_details.slug'
        ]);


        return view('search.expert_result')->with([
            'user_details' => (!empty(Auth::user()->id)) ? UserDetail::getUserByID(Auth::user()->id) : [],
            'data' => $data,
            'industries' => Industry::where('active', 1)->pluck('industry_name', 'id'),
            'experts' => $data,
        ]);
    }
}
