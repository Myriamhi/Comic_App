<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartoonistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cartoonists')->insert([
            [
                'name'=> 'Iwao Takamoto ',
                'nationality'=>'Japon',
                'birth_year'=>'1952',
            ],
            [
                'name'=> 'Akira Toriyama',
                'nationality'=>'Japon',
                'birth_year'=>'1957',
            ],
            [
                'name'=> 'Zep',
                'nationality'=>'Belgique',
                'birth_year'=>'1972',
            ],
            [
                'name'=> 'Hergé',
                'nationality'=>'France',
                'birth_year'=>'1953',
            ],
            [
                'name'=> 'Albert Uderzo',
                'nationality'=>'USA',
                'birth_year'=>'1972',
            ]
        ]);
    }
}
