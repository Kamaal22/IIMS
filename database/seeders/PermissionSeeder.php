<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User permissions
        Permission::create(['name' => 'list-users']);
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);
        Permission::create(['name' => 'view-users']);

        // Role permissions
        Permission::create(['name' => 'list-roles']);
        Permission::create(['name' => 'create-roles']);
        Permission::create(['name' => 'edit-roles']);
        Permission::create(['name' => 'delete-roles']);
        Permission::create(['name' => 'view-roles']);

        // Permission permissions
        Permission::create(['name' => 'list-permissions']);
        Permission::create(['name' => 'create-permissions']);
        Permission::create(['name' => 'edit-permissions']);
        Permission::create(['name' => 'delete-permissions']);
        Permission::create(['name' => 'view-permissions']);

        // Item permissions
        Permission::create(['name' => 'list-items']);
        Permission::create(['name' => 'create-items']);
        Permission::create(['name' => 'edit-items']);
        Permission::create(['name' => 'delete-items']);
        Permission::create(['name' => 'view-items']);
        Permission::create(['name' => 'transfer-items']);

        // Category permissions
        Permission::create(['name' => 'list-categories']);
        Permission::create(['name' => 'create-categories']);
        Permission::create(['name' => 'edit-categories']);
        Permission::create(['name' => 'delete-categories']);
        Permission::create(['name' => 'view-categories']);
    }
}