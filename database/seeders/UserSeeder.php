<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $admin =  \App\Models\User::create([
            'name' => 'Joshua',
            'last_name' => 'Musonga',
            'email'=>    'admin@test.com',
            'phone'=>    '09037949021',
            // 'verified'=> 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        $admin->addRole('admin');

        $admin =  \App\Models\User::create([
            'name' => 'Enlil',
            'last_name' => 'Anunnaki',
            'email'=>    'customer@test.com',
            'phone'=>    '09037949021',
            // 'verified'=> 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        $admin->addRole('customer');

        $admin =  \App\Models\User::create([
            'name' => 'Enki',
            'last_name' => 'Anunnaki',
            'email'=>    'driver@test.com',
            'phone'=>    '09037949021',
            // 'verified'=> 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        $admin->addRole('driver');

        $admin =  \App\Models\User::create([
            'name' => 'Ibrahim',
            'last_name' => 'Ajibade',
            'email'=>    'khalifa@test.com',
            'phone'=>    '09037949021',
            // 'verified'=> 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        $admin->addRole('driver');

        $admin =  \App\Models\User::create([
            'name' => 'Igigi',
            'last_name' => 'Orion',
            'email'=>    'partner@test.com',
            'phone'=>    '09037949021',
            // 'verified'=> 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        $admin->addRole('partners');
    }
}
