<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Borrow;
use Faker\Factory as Faker;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        for ($i = 0; $i < 10; $i++) {
            Borrow::create([
                'reader_id' => $faker->numberBetween(1, 10),
                'book_id' => $faker->numberBetween(1, 10),
                'borrow_date' => $faker->date(),
                'return_date' => $faker->date(),
                'status'=> $faker->randomElement(['Chưa trả','Đã trả']),
            ]);
        }
    }
}
