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
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'Weekly',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'Monthly',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'On Task Completion',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'Annually',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'payment_mode_name' => 'Contractual',
                'active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ]

        ]);
    }
}
