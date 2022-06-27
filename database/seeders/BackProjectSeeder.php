<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class backProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('back_projects')->insert([
            [
                'name' => 'thewayShop',
                'img' => 'projects/oMJW8SdxIXRKJPsYG5DRXjOtXJl5HyfIFEjJVFnh.png',
                'link' => 'http://thewayshop.42web.io/',
            ],
            [
                'name' => 'Hajinyan',
                'img' => 'projects/4g84eV913DW2MfhS2wnAVYb934zkiceSY4ZBy05L.png',
                'link' => '#/',
            ],
            [
                'name' => 'diana',
                'img' => 'projects/kixEdqrs84AZzrdDt0ywU0ahElwbQrgpiswcMKzl.png',
                'link' => 'http://diana.epizy.com/',
            ],
            [
                'name' => 'burgerking',
                'img' => 'projects/6xWCqJAcKM9yE3nZQpjRQVItAl3KalD5Bn0UpG1Q.png',
                'link' => 'http://burgerking.epizy.com/',
            ],
            [
                'name' => 'Justice Academy',
                'img' => 'projects/OBDHsDzLwZTFciY3hlBLDtFUDB6XwRP4LVRZIHAA.png',
                'link' => 'https://justiceacademysub.justiceacademy.am/',
            ],
        ]);
    }
}
