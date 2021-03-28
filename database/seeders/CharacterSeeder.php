<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
            'name' => 'Scooby',
            'cartoonist_id'=> 1,
            'creation_year'=> 1969,
            'comic'=> 'Scooby-Doo',
            ],
            [
            'name' => 'Véra',
            'cartoonist_id'=> 1,
            'creation_year'=> 1969,
            'comic'=> 'Scooby-Doo',
            ],
            [
            'name' => 'Fred',
            'cartoonist_id'=> 1,
            'creation_year'=> 1969,
            'comic'=> 'Scooby-Doo',
            ],
          
        ]);
    }
}
