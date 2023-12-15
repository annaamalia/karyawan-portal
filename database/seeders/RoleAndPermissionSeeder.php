<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        
        // // Membuat permission untuk menambah dan mengelola data karyawan
        // $createUserPermission = Permission::create(['name' => 'create user']);
        // $editUserPermission = Permission::create(['name' => 'edit user']);
        // $deleteUserPermission = Permission::create(['name' => 'delete user']);

        // // Memberikan permission untuk role admin
        // $adminRole->givePermissionTo([
        //     $createUserPermission,
        //     $editUserPermission,
        //     $deleteUserPermission,
        // ]);    
    }
}
