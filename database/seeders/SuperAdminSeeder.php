<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creating user super admin and assigning role super_admin to it
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@demo.com',
            'password' => Hash::make('12345678'),
        ])->assignRole('super_admin');
    }
}
