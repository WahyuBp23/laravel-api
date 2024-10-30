<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() {

        Author::create([
            // author 1
            'name' => 'Ahmad Fadli',
            'birthdate' => '1975-04-12'
        ]);
        Author::create([
            // author 2
            'name' => 'Siti Rahmah',
            'birthdate' => '1982-08-25'
        ]);
        Author::create([
            // author 3
            'name' => 'Budi Santoso',
            'birthdate' => '1993-11-14'
        ]);
        Author::create([
            // author 4
            'name' => 'Dewi Lestari',
            'birthdate' => '1979-02-18'
        ]);
        Author::create([
            // author 5
            'name' => 'Taufiq Rahman',
            'birthdate' => '1968-09-10'
        ]);


        Genre::create([
        // genre 1
        'genre' => 'Sejarah'
        ]);
        Genre::create([
        // genre 1
        'genre' => 'Biografi'
        ]);
        Genre::create([
        // genre 1
        'genre' => 'Fiksi'
        ]);
        Genre::create([
        // genre 1
        'genre' => 'Fiksi Ilmiah'
        ]);
        Genre::create([
        // genre 1
        'genre' => 'Drama'
        ]);
        Genre::create([
        // genre 1
        'genre' => 'Puisi'
        ]);

        Book::create([
        // book 1
        'title' => 'Sejarah Nusantara',
        'author_id' => '1',
        'genre_id' => '1',
        'published_year' => '2014'
        ]);
        Book::create([
        // book 2
        'title' => 'Mengenal Pahlawan Bangsa',
        'author_id' => '1',
        'genre_id' => '2',
        'published_year' => '2018'
        ]);
        Book::create([
        // book 3
        'title' => 'Keluarga di Tengah Badai',
        'author_id' => '2',
        'genre_id' => '5',
        'published_year' => '2017'
        ]);
        Book::create([
        // book 4
        'title' => 'Bunga di Tepi Jalan',
        'author_id' => '3',
        'genre_id' => '4',
        'published_year' => '2020'
        ]);
        Book::create([
        // book 5
        'title' => 'Menjelajahi Galaksi',
        'author_id' => '3',
        'genre_id' => '3',
        'published_year' => '2021'
        ]);
        Book::create([
        // book 6
        'title' => 'Planet Biru',
        'author_id' => '3',
        'genre_id' => '4',
        'published_year' => '2022'
        ]);
        Book::create([
        // book 7
        'title' => 'Perjalanan Malam',
        'author_id' => '4',
        'genre_id' => '3',
        'published_year' => '2019'
        ]);
        Book::create([
        // book 8
        'title' => 'Bayangan di Balik Senja',
        'author_id' => '4',
        'genre_id' => '6',
        'published_year' => '2023'
        ]);
        Book::create([
        // book 9
        'title' => 'Puisi Alam Semesta',
        'author_id' => '5',
        'genre_id' => '6',
        'published_year' => '2015'
        ]);
        Book::create([
        // book 10
        'title' => 'Harmoni Kehidupan',
        'author_id' => '5',
        'genre_id' => '5',
        'published_year' => '2021'
        ]);
    }
}
