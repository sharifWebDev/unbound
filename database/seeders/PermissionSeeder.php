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
                'name' => 'user_management',
                'guard_name' => 'web',
                'created_at' => now(),
            ],
            [
                'name' => 'role_management',
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
