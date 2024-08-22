<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $clientRole = Role::create(['name' => 'client']);

        Permission::create(['name' => 'access admin routes']);
        Permission::create(['name' => 'access client routes']);

        $adminRole->givePermissionTo('access admin routes');
        $clientRole->givePermissionTo('access client routes');
    }
}