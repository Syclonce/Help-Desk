<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@tes.tes',
                'password' => bcrypt('123123123')
            ]
        );
        $admin->assignRole('Admin');


        $superadmin = User::create(
            [
                'name' => 'superadmin',
                'email' => 'superadmin@tes.tes',
                'password' => bcrypt('123123123')
            ]
        );
        $superadmin->assignRole('Super-Admin');


        $user = User::create(
            [
                'name' => 'user',
                'email' => 'user@tes.tes',
                'password' => bcrypt('123123123')
            ]
        );
        $user->assignRole('User');
    }
}
