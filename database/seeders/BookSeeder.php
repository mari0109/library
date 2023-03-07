<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // add

use App\Models\Book; //add

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Book::create ([
        //     'title'=> Str::random(10),
        //     'author'=> Str::randorm(10),
        //     'release' => Str::randorm(10),
        // ]);

        Book::factory()->count(50)->create();
    }
}
