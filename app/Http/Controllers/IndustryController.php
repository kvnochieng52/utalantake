<?php

namespace App\Http\Controllers;

use App\Models\UserSelectedIndustry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndustryController extends Controller
{
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
}
