<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        $permissions = [
            Permission::create(['name' => 'employes:view']),
        ];
        $role->syncPermissions($permissions);
        $role = Role::create(['name' => 'editor']);
        $permissions = [
            Permission::create(['name' => 'employes:create']),
        ];
        $role->syncPermissions($permissions);
    }
}
