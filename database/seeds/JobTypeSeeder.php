<?php

use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_types')->insert([
            [
                'job_type_name' => 'Contract',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'job_type_name' => 'Full-Time',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'job_type_name' => 'Internships/Graduate',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'job_type_name' => 'Part-Time-Time',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ]
        ]);
    }
}
