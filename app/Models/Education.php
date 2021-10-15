<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    public static function EducationMonths()
    {
        $months = [];
        for ($m = 1; $m <= 12; $m++) {
            $months[$m] = date('F', mktime(0, 0, 0, $m));
        }

        return $months;
    }


    public static function EducationYears()
    {
        $start_year = Carbon::now()->subYear(50)->format('Y');
        $end_year = Carbon::now()->addYear(10)->format('Y');

        $years = [];

        for ($y = $start_year; $y <= $end_year; $y++) {
            $years[$y] = $y;
        }

        return $years;
    }
}
