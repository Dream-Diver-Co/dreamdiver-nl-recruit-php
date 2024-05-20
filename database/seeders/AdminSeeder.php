<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'email_verified_at' => now(),
        //     'password' => \Hash::make('12345678'),
        // ]);

        // $user->assignRole('user', 'admin');

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => \Hash::make('12345678'),
        ])->assignRole('user', 'admin');


        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => \Hash::make('12345678'),

        ])->assignRole('user',);

        // User::create([
        //     'name' => 'test',
        //     'email' => 'test@test.com',
        //     'email_verified_at' => now(),
        //     'password' => '12345678',
        // ])->assignRole('user',);
    }
}
