<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('certificates')->insert([
            [
                'name' => 'HTML&CSS',
                'img' => 'certificates/PuwBsqsS5QeFNAJJj2PRWYEeQbWbmt8UrckfYMHB.png',
                'link' => 'certificates/7MYbnIcVmor1IYkZVM6lwyauyJuIAQyxkATsAHiu.pdf',
            ],
            [
                'name' => 'JS',
                'img' => 'certificates/GjumuVNPUt5zRoS27qdgdhqht8xpvP9Q76ff8gJd.png',
                'link' => 'certificates/0VeZFr0eaVy8L0KoWuSz3qHGEG9ZmH9d2yMFKncc.pdf',
            ],
            [
                'name' => 'HTML&CSS',
                'img' => 'certificates/S1WLBhXv8iFxkg5apeazPuUqAdxnVVEjV81XFriQ.png',
                'link' => 'certificates/QueqTo4g7ib42ykaY8OaI6hVQghk85bnPHRum6e4.pdf',
            ],
            [
                'name' => 'uGeek',
                'img' => 'certificates/usCzHKHiPYEzRMxubWVphZfbRwaIHVrXzfFME0pq.png',
                'link' => 'certificates/KTiVu8SU3hadOUCIxlifFSaP5fC2DIWDTEmgtmah.pdf',
            ],
        ]);
    }
}
