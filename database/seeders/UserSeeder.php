<?php

namespace Database\Seeders;

use App\Enum\UserRole;
use App\Enum\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'role' => UserRole::ADMIN,
            'email' => 'test@test.test',
            'email_verified_at' => now(),
            'status' => UserStatus::ACTIVE,
            'password' => Hash::make('password'),
        ]);
    }
}
