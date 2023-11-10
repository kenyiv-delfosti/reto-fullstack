<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'email' => 'ivan@gmail.com',
            'name'  => 'Ivan',
            'password' => \Hash::make('123456'),
        ]);

        // $permissions = Permission::pluck('id', 'id')->all();
        // $role->syncPermissions($permissions);
        $admin->assignRole('admin');

        $consumer = User::create([
            'email' => 'kenyi@gmail.com',
            'name'  => 'Kenyi',
            'password' => \Hash::make('123456'),
        ]);

        $consumer->assignRole('consumer');
    }
}
