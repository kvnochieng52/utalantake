<?php

use Illuminate\Database\Seeder;

class PaymentModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_modes')->insert([
            [
                'payment_mode_name' => 'Hourly',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'Weekly',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'Monthly',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'On Task Completion',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'Annually',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'Contractual',
                'created_by' => 1,
                'updated_by' => 1,
            ]

        ]);
    }
}
