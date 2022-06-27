<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CertificateSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(BackProjectSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ExperienceSeeder::class);
    }
}
