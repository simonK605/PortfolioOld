<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'name' => 'simon',
                'email' => 'simon605@gmail.com',
                'message' => 'this is just test message )',
            ],
        ]);
    }
}
