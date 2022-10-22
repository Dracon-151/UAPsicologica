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
        $user->email = "sistemas@gmail.com";
        $user->password = bcrypt("123456789");
        $user->save();

        $user = new User();
        $user->name = "Chantal Hernández";
        $user->email = "chantalhernandez@gmail.com";
        $user->password = bcrypt("password");
        $user->save();

        $user = new User();
        $user->name = "Karina Aguilar";
        $user->email = "karinaaguilar@gmail.com";
        $user->password = bcrypt("password");
        $user->save();
    }
}
