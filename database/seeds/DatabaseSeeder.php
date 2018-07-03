<?php

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
        $this->call(AuthorsTablesSeeder::class);
        $this->call(BooksTablesSeeder::class);
        $this->call(GenresTablesSeeder::class);
        $this->call(Book_GenreTablesSeeder::class);
    }
}
