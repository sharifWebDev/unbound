<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => 'admin_dashboard',
                'alias' => 'Admin Dashboard',
                'group' => 'Dashboard',
                'guard_name' => 'web',
                'created_at' => now(),

            ],
            [
                'name' => 'tour_guide_dashboard',
                'alias' => 'Tour Guide Dashboard',
                'group' => 'Dashboard',
                'guard_name' => 'web',
                'created_at' => now(),
            ],
            [
                'name' => 'customer_dashboard',
                'alias' => 'Customer Dashboard',
                'group' => 'Dashboard',
                'guard_name' => 'web',
                'created_at' => now(),
            ],
            [
                'name' => 'user_management',
                'alias' => 'Users Management',
                'group' => 'User Management',
                'guard_name' => 'web',
                'created_at' => now(),
            ],
            [
                'name' => 'role_management',
                'alias' => 'Role Management',
                'group' => 'User Management',
                'guard_name' => 'web',
                'created_at' => now(),
            ],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $permissionsTable = DB::table('permissions');
        Permission::truncate();
        $permissionsTable->insert($permissions);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
