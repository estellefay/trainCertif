<?php

use Illuminate\Database\Seeder;

class AuthorsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'JK Rolling',
            ],
            [
                'name' => 'JRR Tolkien',
            ],
            [
                'name' => 'Enid Blyton',
            ],

        ]);
    }
}
