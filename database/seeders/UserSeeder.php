<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin user
        $admin = User::create([
            'role_id' => Roles::ADMIN,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => true,
            'phone' => fake()->phoneNumber(),
            'email_verified_at' => now(),
            'phone_verified_at' => now(),
        ]);
        // creating stripe customer
        $admin->createAsStripeCustomer();

        // normal user
        $user = User::create([
            'role_id' => Roles::USER,
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => true,
            'phone' => fake()->phoneNumber(),
            'email_verified_at' => now(),
            'phone_verified_at' => now(),
        ]);

        // creating stripe customer
        $user->createAsStripeCustomer();
    }
}
