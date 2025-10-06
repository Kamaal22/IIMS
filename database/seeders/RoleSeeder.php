<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $userRole = Role::create(['name' => 'user']);
        
        // Get all permissions
        $permissions = Permission::all();
        
        // Assign all permissions to admin role
        $adminRole->syncPermissions($permissions);
        
        // Assign specific permissions to manager role
        $managerRole->syncPermissions(
            $permissions->filter(function ($permission) {
                return !str_contains($permission->name, 'delete') && 
                       !str_contains($permission->name, 'role') && 
                       !str_contains($permission->name, 'permission');
            })
        );
        
        // Assign limited permissions to user role
        $userRole->syncPermissions(
            $permissions->filter(function ($permission) {
                return str_contains($permission->name, 'view') || 
                       str_contains($permission->name, 'list');
            })
        );
    }
}