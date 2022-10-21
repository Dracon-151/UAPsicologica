<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Sistemas";
        $user->email = "devcobaja@gmail.com";
        $user->password = bcrypt("K9gdxP4QVpET3r");
        $user->save();
    }
}
