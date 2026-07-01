<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//ambil dari pakej spatie , x perlu create model Role
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ambil dari pakej spatie , x perlu create model Role
        $role = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );

        $permissionNames = [
            //visitor
            'index visitors',
            'create visitors',
            'edit visitors',
            'delete visitors',
            //blog
            'index blogs',
            'create blogs',
            'edit blogs',
            'delete blogs',
            //user
            'index users',
            'create users',
            'edit users',
            'delete users',
        ];

        $permissions = collect($permissionNames)->map(
            fn (string $name) => Permission::firstOrCreate(
                ['name' => $name, 'guard_name' => 'web']
            )
        );

        $role->syncPermissions($permissions);

        $user = User::firstOrCreate(
            ['email' => 'alice@gmail.com'],
            [
                'name' => 'alice',
                'password' => Hash::make('password'),
            ]
        );

        $user->assignRole('admin');
    }
}
