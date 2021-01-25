<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::truncate();

        $faker = \Faker\Factory::create();

        $categories = App\Category::all();

        foreach ($categories as $category)
        {
            for ($i = 0; $i < 10;$i++)
            {
                Question::create
                (
                    [
                        'title' => $faker->name,
                        'category_id' => $category->id
                    ]
                );
            }
        }
    }

}
