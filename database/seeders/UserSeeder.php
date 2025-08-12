<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();

        $now = Carbon::now();

        $users = [
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'super_admin@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
                'phone' => '0000000000',
                'address' => 'Bangladesh',
                'country' => 'BD',
                'role' => 'super_admin',
                'otp' => null,
                'otp_expires_at' => null,
                'last_login_at' => $now,
                'last_login_ip' => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
                'phone' => '0000000000',
                'address' => 'Bangladesh',
                'country' => 'BD',
                'role' => 'admin',
                'otp' => null,
                'otp_expires_at' => null,
                'last_login_at' => $now,
                'last_login_ip' => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Tour',
                'last_name' => 'Guide',
                'email' => 'tour_guide@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
                'phone' => '0000000000',
                'address' => 'Bangladesh',
                'country' => 'BD',
                'role' => 'tour_guide',
                'otp' => null,
                'otp_expires_at' => null,
                'last_login_at' => $now,
                'last_login_ip' => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('users')->insert($users);

        DB::table('customers')->truncate();

        $customers = [
            [
                'first_name' => 'Customer',
                'last_name' => 'User',
                'email' => 'customer@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
                'phone' => '0000000000',
                'address' => 'Bangladesh',
                'country' => 'BD',
                'otp' => null,
                'otp_expires_at' => null,
                'last_login_at' => $now,
                'last_login_ip' => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('customers')->insert($customers);

        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
