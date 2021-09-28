<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('countries')->insert([
                [
                    'country_code' => 254,
                    'active' => 1,
                    'country_name' => 'Kenya',
                    'created_by' => 1,
                    'updated_by' => 1,
                ],
                [
                    'country_code' => 256,
                    'active' => 0,
                    'country_name' => 'Uganda',
                    'created_by' => 1,
                    'updated_by' => 1,
                ],
                [
                    'country_code' => 255,
                    'active' => 0,
                    'country_name' => 'Tanzania',
                    'created_by' => 1,
                    'updated_by' => 1,
                ],
                [
                    'country_code' => 250,
                    'active' => 0,
                    'country_name' => 'Rwanda',
                    'created_by' => 1,
                    'updated_by' => 1,
                ],
                [
                    'country_code' => 257,
                    'active' => 0,
                    'country_name' => 'Burundi',
                    'created_by' => 1,
                    'updated_by' => 1,
                ]
            ]);
        }
    }
}
