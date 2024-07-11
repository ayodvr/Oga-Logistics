<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin =  \App\Models\Account::create([
            'acct_name' => 'Nath Oyedele',
            'acct_number' => '1469670513',
            'bank_name' => 'Access Bank'
        ]);
    }
}
