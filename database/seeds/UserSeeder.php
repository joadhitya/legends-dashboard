<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'phone' => '08176731986',
            'sex' => NULL,
            'role_name' => 'Super Admin',
            'bg_color' => '#f07f9c',
            'id_role' => 1
        ]);
    }
}
