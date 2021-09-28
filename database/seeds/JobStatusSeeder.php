<?php

use Illuminate\Database\Seeder;

class JobStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_statuses')->insert([
            [
                'job_status_name' => 'Open',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'job_status_name' => 'Closed',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ]
        ]);
    }
}
