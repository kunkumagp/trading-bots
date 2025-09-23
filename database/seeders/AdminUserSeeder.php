<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create SuperAdmin user
        User::create([
            'name' => 'SuperAdmin',
            'email' => 'admin',
            'password' => Hash::make('admin'),
            'user_role' => 'superadmin',
            'email_verified_at' => now(),
        ]);

        // Create admin user
        User::create([
            'name' => 'Trading Bot Admin',
            'email' => 'admin@tradingbots.com',
            'password' => Hash::make('password123'),
            'user_role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Create trader user
        User::create([
            'name' => 'John Trader',
            'email' => 'trader@tradingbots.com',
            'password' => Hash::make('password123'),
            'user_role' => 'trader',
            'email_verified_at' => now(),
        ]);

        // Create regular user
        User::create([
            'name' => 'Regular User',
            'email' => 'user@tradingbots.com',
            'password' => Hash::make('password123'),
            'user_role' => 'user',
            'email_verified_at' => now(),
        ]);

        $this->command->info('SuperAdmin, Admin, Trader, and User accounts created successfully!');
        $this->command->info('SuperAdmin: admin / admin');
        $this->command->info('Admin: admin@tradingbots.com / password123');
        $this->command->info('Trader: trader@tradingbots.com / password123');
        $this->command->info('User: user@tradingbots.com / password123');
    }
}
