<?php

use Illuminate\Database\Seeder;

class BooksTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Harry Potter',
                'price' => 12,
                'author_id' => 1,
            ],
            [
                'title' => 'The loard og the ring',
                'price' => 2,
                'author_id' => 2,
            ],
            [
                'title' => 'Oui Oui au pays des animaux',
                'price' => 20,
                'author_id' => 3,
            ],

        ]);
    }
}
