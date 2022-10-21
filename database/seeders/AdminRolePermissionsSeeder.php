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
        $administrador = Role::create(['name' => 'Administrador']);

        //usuarios
        Permission::create([
            'name' => 'users.get'
        ]);
        Permission::create([
            'name' => 'users.edit'
        ]);
        Permission::create([
            'name' => 'users.add'
        ]);
        Permission::create([
            'name' => 'users.delete'
        ]);

        //Administrador        
        $administrador->givePermissionTo([
            'users.get',
            'users.edit',
            'users.add',
            'users.delete',
        ]);

        //Asignando permisos a usuario admin
        $user = User::where('id', 1)->firstOrFail();
        $user->role_id = 1;
        $user->assignRole($user->role_id);
        $user->save();
    }
}
