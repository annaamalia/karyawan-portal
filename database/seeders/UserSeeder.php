<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat role admin
        // $role = Role::create(['name' => 'web-admin', 'guard_name' => 'web']);
        
        $user = User::create([
            'name' => 'Developer',
            'nik' => '0',
            'password' => bcrypt('password'),
        ]);

        $role = Role::create(['name' => 'admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole('admin');

        // $role = Role::findByName('admin');
        // $user->assignRole($role);

        // $role = Role::findByName('admin', 'web');
        // $user->assignRole($role);
        // $adminRole = Role::create(['name' => 'admin']);
    }
}
