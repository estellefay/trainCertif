<?php

use Illuminate\Database\Seeder;

class GenresTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => 'Fantasy',
            ],
            [
                'name' => 'Horror',
            ],
            [
                'name' => 'Heroic-Fantastic',
            ],

        ]);
    }
}
