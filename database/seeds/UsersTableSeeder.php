<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin_admin'),
        'role' => 0
        ]);

        User::create([
        'name' => 'tec',
        'email' => 'tec@tec.com',
        'password' => bcrypt('tec_tec'),
        'role' => 1
        ]);

        User::create([
        'name' => 'user',
        'email' => 'user@user.com',
        'password' => bcrypt('user_user'),
        'role' => 2
        ]);
    }
}
