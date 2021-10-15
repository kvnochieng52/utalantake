<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\UserSelectedSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function autocomplete_skills(Request $request)
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
