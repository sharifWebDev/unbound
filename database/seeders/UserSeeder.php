<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Customer;
use App\Models\CustomerDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        User::truncate();
        UserDetail::truncate();
        Customer::truncate();
        CustomerDetail::truncate();

        $usersData = [
            [
                'first_name'        => 'Super',
                'last_name'         => 'Admin',
                'email'             => 'super_admin@gmail.com',
                'email_verified_at' => $now,
                'password'          => Hash::make('12345678'),
                'phone'             => '0000000000',
                'otp'               => null,
                'otp_expires_at'    => null,
                'last_login_at'     => $now,
                'last_login_ip'     => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_active'         => true,
                'created_at'        => $now,
                'updated_at'        => $now,
                'role'              => 'super_admin',
            ],
            [
                'first_name'        => 'Admin',
                'last_name'         => 'User',
                'email'             => 'admin@gmail.com',
                'email_verified_at' => $now,
                'password'          => Hash::make('12345678'),
                'phone'             => '0000000000',
                'otp'               => null,
                'otp_expires_at'    => null,
                'last_login_at'     => $now,
                'last_login_ip'     => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_active'         => true,
                'created_at'        => $now,
                'updated_at'        => $now,
                'role'              => 'admin',
            ],
            [
                'first_name'        => 'Tour',
                'last_name'         => 'Guide',
                'email'             => 'tour_guide@gmail.com',
                'email_verified_at' => $now,
                'password'          => Hash::make('12345678'),
                'phone'             => '0000000000',
                'otp'               => null,
                'otp_expires_at'    => null,
                'last_login_at'     => $now,
                'last_login_ip'     => '127.0.0.1',
                'terms_accepted_at' => $now,
                'subscribe_newsletter' => true,
                'is_active'         => true,
                'created_at'        => $now,
                'updated_at'        => $now,
                'role'              => 'tour_guide',
            ],
        ];

        foreach ($usersData as $data) {

            $user = User::create($data);
            
            UserDetail::create([
                'user_id'   => $user->id,
                'address'   => 'Dhaka, Bangladesh',
                'nationality' => 'Bangladeshi',
                'designation' => ucfirst(str_replace('_', ' ', $data['role'])),
                'country_id' => 1,
            ]);
        }

        /** ─────────────────────────────
         *  Create Customers with Details
         *  ───────────────────────────── */
        $customer = Customer::create([
            'first_name'        => 'Customer',
            'last_name'         => 'User',
            'email'             => 'customer@gmail.com',
            'email_verified_at' => $now,
            'password'          => Hash::make('12345678'),
            'phone'             => '0000000000',
            'otp'               => null,
            'otp_expires_at'    => null,
            'last_login_at'     => $now,
            'last_login_ip'     => '127.0.0.1',
            'terms_accepted_at' => $now,
            'subscribe_newsletter' => true,
            'is_active'         => true,
            'created_at'        => $now,
            'updated_at'        => $now,
        ]);

        CustomerDetail::create([
            'customer_id'         => $customer->id,
            'address'             => 'Dhaka, Bangladesh',
            'nationality'         => 'Bangladeshi',
            'preferred_language'  => 'English',
            'email_notifications' => true,
            'marketing_updates'   => false,
            'country_id'          => 1,
        ]);
    }
}
