<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public static function getUserByID($id)
    {

        return  User::leftJoin('user_details', 'users.id', '=', 'user_details.user_id')
            ->leftJoin('countries', 'user_details.country_id', '=', 'countries.id')
            ->leftJoin('counties', 'user_details.county_id', '=', 'counties.id')
            ->leftJoin('towns', 'user_details.town_id', '=', 'towns.id')
            ->where('users.id', $id)
            ->first([
                'users.id',
                'users.name',
                'users.account_type',
                'users.email',
                'user_details.*',
                'country_name',
                'county_name',
                'town_name'
            ]);
    }
}
