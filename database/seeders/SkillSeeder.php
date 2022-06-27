<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'name' => 'html css',
                'percent' => '90',
            ],
            [
                'name' => 'bootstrap',
                'percent' => '80',
            ],
            [
                'name' => 'sass less scss',
                'percent' => '70',
            ],
            [
                'name' => 'svg canvas',
                'percent' => '60',
            ],
            [
                'name' => 'bem methodology',
                'percent' => '80',
            ],
            [
                'name' => 'java script',
                'percent' => '85',
            ],
            [
                'name' => 'jquery',
                'percent' => '40',
            ],
            [
                'name' => 'back js',
                'percent' => '55',
            ],
            [
                'name' => 'angular js',
                'percent' => '55',
            ],
            [
                'name' => 'php',
                'percent' => '80',
            ],
            [
                'name' => 'SQL',
                'percent' => '80',
            ],
            [
                'name' => 'laravel',
                'percent' => '80',
            ],
            [
                'name' => 'symfony',
                'percent' => '40',
            ],
            [
                'name' => 'git',
                'percent' => '80',
            ],
        ]);
    }
}
