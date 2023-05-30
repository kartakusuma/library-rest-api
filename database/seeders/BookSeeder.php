<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 50; $i++) {
            Book::create([
                'name' => $faker->sentence,
                'author' => $faker->name,
                'publish_date' => $faker->date,
            ]);
        }
    }
}
