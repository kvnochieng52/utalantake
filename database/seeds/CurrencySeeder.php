<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
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
                'visible' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'currency_name' => 'USD',
                'visible' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ]
        ]);
    }
}
