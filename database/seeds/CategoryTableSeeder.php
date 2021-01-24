<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0;$i < 10;$i++) {
            Category::create
            (
                ['name' => $faker->name]
            );
        }
    }
}
