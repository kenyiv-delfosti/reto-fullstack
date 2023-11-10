<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        $permissions = Permission::pluck('id', 'id')->all();
        $admin->syncPermissions($permissions);

        $consumer = Role::create([
            'name' => 'consumer',
            'guard_name' => 'web'
        ]);

        $adminPermission = Permission::pluck('id', 'id')->all();
        $consumer->syncPermissions($adminPermission);
        $consumer->revokePermissionTo('user-create');
    }
}
