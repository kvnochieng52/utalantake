<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    const  TASK_CODE = 1;
    const  JOB_CODE = 2;

    public static function getJobsByUserID($user_id)
    {
        return self::select(['jobs.*'])->leftJoin('job_post_types', 'jobs.post_type', '=', 'job_post_types.id')
            ->leftJoin('job_education_levels', 'jobs.job_qualification_id', '=', 'job_education_levels.id')
            ->where('jobs.user_id', $user_id)
            ->orderBy('jobs.id', 'DESC');
    }
}
