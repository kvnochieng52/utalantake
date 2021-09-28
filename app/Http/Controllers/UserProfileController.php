<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function select_account_type()
    {
        return view('profile.select_account_type')->with([
            'FULL_ACCESS_AC_TYPE' => AccountType::FULL_ACCESS_AC_TYPE,
            'LIMITED_ACCESS_AC_TYPE' => AccountType::LIMITED_ACCESS_AC_TYPE,
        ]);
    }
    public function select_acc_type_store(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->account_type = $request->input('account_type');
        $user->save();
        return redirect('/profile')->with('success', 'Details Saved Successfully...Please proceed to finish your profile');
    }
}
