<?php

use Illuminate\Database\Seeder;

class JobEducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_education_levels')->insert([
            [
                'education_level_name' => 'Certificate',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'education_level_name' => 'Diploma',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'education_level_name' => 'Bachelors Degree',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'education_level_name' => 'Masters',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ]
        ]);
    }
}
