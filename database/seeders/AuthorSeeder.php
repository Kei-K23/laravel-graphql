<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author = Author::create(['name' => 'Author 1']);
        $author->books()->createMany([
            ['title' => 'Book 1'],
            ['title' => 'Book 2'],
            ['title' => 'Book 3']
        ]);

        $author = Author::create(['name' => 'Author 2']);
        $author->books()->createMany([
            ['title' => 'Book 1'],
            ['title' => 'Book 2'],
            ['title' => 'Book 3']
        ]);
    }
}
