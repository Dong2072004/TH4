<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        for ($i = 0; $i < 10; $i++) {
            Book::create([
                'name' => $faker->name,
                'author' => $faker->name,
                'category' => $faker->word,
                'year' => $faker->year,
                'quantity'=>$faker->randomNumber(2),

            ]);
        }
    }
}
