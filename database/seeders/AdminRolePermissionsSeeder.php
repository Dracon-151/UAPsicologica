<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminRolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Administrador']);
        $psicologa = Role::create(['name' => 'Psicologo/a']);

        //usuarios
        Permission::create([
            'name' => 'register.get'
        ]);
        Permission::create([
            'name' => 'register.edit'
        ]);
        Permission::create([
            'name' => 'register.add'
        ]);
        Permission::create([
            'name' => 'register.delete'
        ]);

        $psicologa->givePermissionTo([
            'register.get',
            'register.edit',
            'register.add',
            //'register.delete',
        ]);

        $admin->givePermissionTo([
            'register.get',
            'register.edit',
            'register.add',
            'register.delete',
        ]);

        $user = User::where('id', 1)->firstOrFail();
        $user->role_id = 1;
        $user->assignRole($user->role_id);
        $user->save();

        $user = User::where('id', 2)->firstOrFail();
        $user->role_id = 2;
        $user->assignRole($user->role_id);
        $user->save();

        $user = User::where('id', 3)->firstOrFail();
        $user->role_id = 2;
        $user->assignRole($user->role_id);
        $user->save();
    }
}
