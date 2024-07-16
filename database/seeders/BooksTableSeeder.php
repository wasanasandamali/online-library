<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'The Great Gatsby',
                'description' => 'A novel written by American author F. Scott Fitzgerald.',
                'genre' => 'Classic',
                'price' => 10.99,
            ],
            [
                'title' => '1984',
                'description' => 'A dystopian social science fiction novel and cautionary tale, written by the English writer George Orwell.',
                'genre' => 'Dystopian',
                'price' => 8.99,
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'description' => 'A novel by Harper Lee published in 1960. It was immediately successful, winning the Pulitzer Prize.',
                'genre' => 'Fiction',
                'price' => 12.99,
            ],
            // Add more books as needed
        ];

        foreach ($books as $book) {
            DB::table('books')->insert([
                'title' => $book['title'],
                'description' => $book['description'],
                'genre' => $book['genre'],
                'price' => $book['price'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
