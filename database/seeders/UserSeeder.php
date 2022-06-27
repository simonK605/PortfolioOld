<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'simon',
                'last_name' => 'karpetyan',
                'email' => 'simonkarapetyan605@gmail.com',
                'login' => 'simon',
                'role' => 'admin',
                'password' => '$2y$10$i7Zjoz7OcAFI3r5vJPw2M.gmT42.Xc7XK2bi.6CjvWBVYnhb3fqs2',
            ],
        ]);
    }
}
