<?php

use Illuminate\Database\Seeder;

class Book_GenreTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_genre')->insert([
            [
                'genre_id' => 1,
                'book_id' => 1,
            ],
            [
                'genre_id' => 2,
                'book_id' => 2,
            ],
            [
                'genre_id' => 3,
                'book_id' => 2,
            ],

        ]);
    }
}
