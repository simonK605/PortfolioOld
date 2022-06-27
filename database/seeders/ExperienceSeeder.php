<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            [
                'name' => 'Lucky Team',
                'profession' => 'Traning',
                'date' => '10/2019 - 11/2019',
            ],
            [
                'name' => 'Haytech Solutions',
                'profession' => 'Traning',
                'date' => '07/2020 - 1 Week',
            ],
            [
                'name' => 'Foton Corporation',
                'profession' => 'Internship',
                'date' => '09/2020 - 11/2020',
            ],
            [
                'name' => 'Foton Corporation',
                'profession' => 'Front-End developer',
                'date' => '11/2020 - 12/2020',
            ],
            [
                'name' => 'Justice Academy',
                'profession' => 'Full-Stack developer',
                'date' => '04/2021 - 04/2022',
            ],
            [
                'name' => 'Esterox LLC',
                'profession' => 'Full-Stack developer',
                'date' => '04/2022 - Present',
            ],
        ]);
    }
}
