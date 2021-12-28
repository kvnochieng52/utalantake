<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            [
                'currency_name' => 'KES',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'currency_name' => 'USD',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ]
        ]);
    }
}
