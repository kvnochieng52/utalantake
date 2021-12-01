<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPostTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_post_types')->insert([
            [
                'job_post_type_name' => 'Task',
                'visible' => 1,
            ],
            [
                'job_post_type_name' => 'Job',
                'visible' => 1,
            ]
        ]);
    }
}
