<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Role::truncate();
        DB::table('role_has_permissions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $permissions = Permission::all();
        $permissionNames = $permissions->pluck('name')->toArray();

        Role::create(['name' => 'super_admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $tourGuideRole = Role::create(['name' => 'tour_guide']);

        $adminRole->syncPermissions($permissionNames);
        $tourGuideRole->syncPermissions($permissionNames);

        if ($user = User::find(1)) {
            $user->assignRole('super_admin');
        }

        if ($user = User::find(2)) {
            $user->assignRole('admin');
        }

        if ($user = User::find(3)) {
            $user->assignRole('tour_guide');
        }
    }
}
