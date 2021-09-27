<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function regsiter_account(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->input('first_name') . " " . $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->is_active = User::USER_IS_ACTIVE_CODE;
        $user->save();

        $user_details = new UserDetail();
        $user_details->user_id =  $user->id;
        $user_details->first_name = $request->input('first_name');
        $user_details->last_name = $request->input('last_name');
        $user_details->primary_phone = $request->input('telephone');
        $user_details->created_by =  $user->id;
        $user_details->updated_by =  $user->id;
        $user_details->save();

        return redirect('/login')->with('success', 'Account Successfully Created. Please Login to continue');
    }
}
