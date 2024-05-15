<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Can access all features!'
            ],
            [
                'name' => 'customer',
                'display_name' => 'Rider',
                'description' => 'Can access all features!'
            ],
            [
                'name' => 'driver',
                'display_name' => 'Driver',
                'description' => 'Can access all features!'
            ],
            [
                'name' => 'partners',
                'display_name' => 'Partners',
                'description' => 'Can access limited features!'
            ],
        ];

        foreach ($roles as $key => $value) {
            $role = Role::create([
                'name' => $value['name'],
                'display_name' => $value['display_name'],
                'description' => $value['description']
            ]);

            // User::first()->attachRole($role);
        }
    }
}


