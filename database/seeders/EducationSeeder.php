<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            [
                'name' => 'College of National Polytechnic University of Armenia',
                'profession' => 'Communication networks and communication systems',
                'date' => '2014 - 2018',
            ],
            [
                'name' => 'Yerevan State University of Architecture and Construction',
                'profession' => 'Information technologies and information management systems',
                'date' => '2018 - Our Times',
            ],
            [
                'name' => 'Microsoft',
                'profession' => 'Front-End development',
                'date' => '01/2019 - 03/2019',
            ],
            [
                'name' => 'UGeek',
                'profession' => 'Front-End development',
                'date' => '02/2020 - 09/2020',
            ],
            [
                'name' => 'ArmBit',
                'profession' => 'Back-End development',
                'date' => '06/2021 - 10/2021',
            ],
        ]);
    }
}
