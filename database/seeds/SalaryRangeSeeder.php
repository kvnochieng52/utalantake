<?php

use Illuminate\Database\Seeder;

class SalaryRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salary_ranges')->insert([
            [
                'salary_range_description' => 'Below 30,000',
                'from_amount' => 0,
                'to_amount' => 30000,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'salary_range_description' => '30,000-50,000',
                'from_amount' => 30000,
                'to_amount' => 50000,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'salary_range_description' => '50,000-75,000',
                'from_amount' => 50000,
                'to_amount' => 75000,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'salary_range_description' => '75,000-100,000',
                'from_amount' => 75000,
                'to_amount' => 100000,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'salary_range_description' => '100,000-150,000',
                'from_amount' => 100000,
                'to_amount' => 150000,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'salary_range_description' => '150,000-250,000',
                'from_amount' => 150000,
                'to_amount' => 255000,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'salary_range_description' => 'Above 250,000',
                'from_amount' => 250000,
                'to_amount' => -1,
                'created_by' => 1,
                'updated_by' => 1,
            ]
        ]);
    }
}
