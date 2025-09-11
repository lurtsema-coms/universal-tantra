<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'test@admin.com'],
            [
                'first_name' => 'Admin',
                'last_name'  => 'Backend',
                'name'       => 'Admin Backend',
                'email'      => 'test@admin.com',
                'role'       => 'Admin',
                'password'   => bcrypt('password'),
            ]
        );

        User::updateOrCreate(
            ['email' => 'test@user.com'],
            [
                'first_name' => 'Admin',
                'last_name'  => 'Frontend',
                'name'       => 'Admin Frontend',
                'email'      => 'test@user.com',
                'role'       => 'User',
                'password'   => bcrypt('password'),
            ]
        );
    }
}
