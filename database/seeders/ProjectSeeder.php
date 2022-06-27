<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'etecc',
                'img' => 'projects/JI2YQHldSrUY25OrbnaSjtOHExxt4guS1i31iBCP.png',
                'link' => 'https://simon-svg.github.io/Etecc/',
            ],
            [
                'name' => 'tanx',
                'img' => 'projects/bBcUPevWVNMUJ3unurYAz1ruSICnLtm3ykFW6Yum.png',
                'link' => 'https://simon-svg.github.io/TANx/',
            ],
            [
                'name' => 'bouncy',
                'img' => 'projects/jIfllv1AgLRX3yDiWNcvqEpPM3fDAl9ilwc7Ii2z.png',
                'link' => 'https://simon-svg.github.io/Bouncy/',
            ],
            [
                'name' => 'thomsoon',
                'img' => 'projects/Dqw0QIKGYzRgNBceNLtG48hZx8YAQiaCMSHOtQSh.png',
                'link' => 'https://simon-svg.github.io/Thomsoon/',
            ],
            [
                'name' => 'newyear',
                'img' => 'projects/QIayu8xF8SFP2jzqNl2YI5A3qMq3yaPABNiONfEN.png',
                'link' => 'https://simon-svg.github.io/NewYear/',
            ],
            [
                'name' => 'carsEvolution',
                'img' => 'projects/pMCpa4Ez2Tu0X44JTy86lvhnraULiwPSBAj3hOqA.png',
                'link' => 'https://simon-svg.github.io/CarsEvolution/',
            ],
            [
                'name' => 'shop',
                'img' => 'projects/ISpWRqtvYUt7faV3oR6WGxwwIPisW2wx8QNgaRPC.png',
                'link' => 'https://simon-svg.github.io/Shop/',
            ],
            [
                'name' => 'foton',
                'img' => 'projects/wOlKzSQdrQ4qGN7ag7F1vGqK30Q4J8BIV8XTBfZV.png',
                'link' => 'https://simon-svg.github.io/Foton/',
            ],
            [
                'name' => 'digital',
                'img' => 'projects/wUZmkAR1OYPl2VZO4SDFZ4qIEyeyqTh4xpgCaRFC.png',
                'link' => 'https://simon-svg.github.io/Digital/',
            ],
            [
                'name' => 'b&w',
                'img' => 'projects/fg1api5ZKrsXWPfxit4a1T1dSo3PG7qqFhMJVPjo.png',
                'link' => 'https://simon-svg.github.io/BW/',
            ],
            [
                'name' => 'asentus',
                'img' => 'projects/t28FXWtz0hOjukOEaUgQM4dzGlK0x6yss9xYFiJF.png',
                'link' => 'https://simon-svg.github.io/Asentus/',
            ],
            [
                'name' => 'shopno',
                'img' => 'projects/gKoJwcBlvvecDFU65QI7OUPJZb0OaS1nvo9LW1tt.png',
                'link' => 'https://simon-svg.github.io/Shopno/',
            ],
            [
                'name' => 'fusemap',
                'img' => 'projects/byxCLxzy2gYWYQo7odEArScMVz1XuEj4sjESBQBt.png',
                'link' => 'https://simon-svg.github.io/FuseMap/',
            ],
            [
                'name' => 'trello',
                'img' => 'projects/mSPvM45KVpB4ijxWbwD43PfKlfW898KP9gzSkmOc.png',
                'link' => 'https://simon-svg.github.io/Trello/',
            ],
            [
                'name' => 'api',
                'img' => 'projects/2SThQqTEa2NAWfU0UpVpXoVJRHnOojqTTvYXA0yj.png',
                'link' => 'https://simon-svg.github.io/API/',
            ],
            [
                'name' => 'icrowdme',
                'img' => 'projects/CGS0Pz9DeuVoeGp2cD0zhcVcypVNooQbXC4BcGK5.png',
                'link' => 'https://simon-svg.github.io/Icrowdme/',
            ],
            [
                'name' => 'gitara',
                'img' => 'projects/HTik4ZIJ3val1KDQyLMyfQ67VtSzREhmekBpLBqM.png',
                'link' => 'https://simon-svg.github.io/Gitara/',
            ],
            [
                'name' => 'Universe',
                'img' => 'projects/xDfj9z7SvF4b2psFRESSHqdyxysDt9BbNeRYI3HL.png',
                'link' => 'https://simon-svg.github.io/Universe/',
            ],
            [
                'name' => 'smart',
                'img' => 'projects/ATXLnQiLFZmUJQxzBr1A5GaUUZ8545TxgMa883cM.png',
                'link' => '#/',
            ],
            [
                'name' => 'hardWork',
                'img' => 'projects/kGym0KZcjwPFyx5tnNQ1J7MhnBHCLhmGcjSd3Luz.png',
                'link' => '#/',
            ],
            [
                'name' => 'startup',
                'img' => 'projects/FqqSc1yP8IZcoHNet8FKJIDfYDfT4JqwhwEENQRT.png',
                'link' => 'https://simon-svg.github.io/Startup/',
            ],
        ]);
    }
}
