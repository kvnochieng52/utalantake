<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_types')->insert([
            [
                'account_type_name' => 'Full Access',
                'visible' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'account_type_name' => 'Limited',
                'visible' => 1,
                'created_by' => 1,
                'updated_by' => 1,
            ]
        ]);
    }
}
