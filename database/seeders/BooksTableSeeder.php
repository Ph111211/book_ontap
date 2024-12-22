<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
 use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) { // Tạo 50 dòng dữ liệu
            DB::table('books')->insert([
                'name' => $faker->sentence(3), // Tên sách giả lập
                'author' => $faker->name, // Tác giả giả lập
                'category' => $faker->word, // Thể loại giả lập
                'year' => $faker->year, // Năm giả lập
                'quantity' => $faker->numberBetween(1, 100), // Số lượng sách từ 1 đến 100
            ]);
        }
    }
}
