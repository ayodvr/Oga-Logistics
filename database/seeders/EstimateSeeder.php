<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstimateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin =  \App\Models\Estimate::create([
            'baseFare' => 3.5,
            'ratePerKm' => 2.5
        ]);
    }
}
