<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\CustomerDetail;
use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        UserDetail::truncate();
        Customer::truncate();
        CustomerDetail::truncate();

        $usersData = [
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'super_admin@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'phone' => '0000000000',
                'otp' => null,
                'otp_expires_at' => null,
                'last_login_at' => $now,
                'last_login_ip' => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_tour_guide' => false,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
                // 'role'              => 'super_admin',
                'two_factor_confirmed_at' => $now,
                'deleted_at' => null,
            ],
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'phone' => '0000000000',
                'otp' => null,
                'otp_expires_at' => null,
                'last_login_at' => $now,
                'last_login_ip' => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_tour_guide' => false,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
                // 'role'              => 'admin',
                'two_factor_confirmed_at' => $now,
                'deleted_at' => null,
            ],
            [
                'first_name' => 'Tour',
                'last_name' => 'Guide',
                'email' => 'tour_guide@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'phone' => '0000000000',
                'otp' => null,
                'otp_expires_at' => null,
                'last_login_at' => $now,
                'last_login_ip' => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_tour_guide' => true,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
                // 'role'              => 'tour_guide',
                'two_factor_confirmed_at' => $now,
                'deleted_at' => null,
            ],
        ];

        foreach ($usersData as $data) {

            $user = User::create($data);

            UserDetail::create([
                'user_id' => $user->id,
                'address' => 'Dhaka, Bangladesh',
                'nationality' => 'Bangladeshi',
                'country_id' => 1,
            ]);
        }

        /** ─────────────────────────────
         *  Create Customers with Details
         *  ───────────────────────────── */
        $customer = Customer::create([
            'first_name' => 'Customer',
            'last_name' => 'User',
            'email' => 'customer@gmail.com',
            'email_verified_at' => $now,
            'password' => Hash::make('12345678'),
            'phone' => '0000000000',
            'otp' => null,
            'otp_expires_at' => null,
            'last_login_at' => $now,
            'last_login_ip' => '127.0.0.1',
            'terms_accepted_at' => $now,
            'subscribe_newsletter' => true,
            'is_active' => true,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        CustomerDetail::create([
            'customer_id' => $customer->id,
            'address' => 'Dhaka, Bangladesh',
            'nationality' => 'Bangladeshi',
            'preferred_language' => 'English',
            'email_notifications' => true,
            'marketing_updates' => false,
            'country_id' => 1,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
