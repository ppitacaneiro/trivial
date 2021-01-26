<?php

use App\Answer;
use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::truncate();

        $faker = \Faker\Factory::create();

        $questions = App\Question::all();
        
        foreach ($questions as $question)
        {
            $corrects = $this->generateBooleanCorrectsAnswer();

            for ($i = 0;$i < 4;$i++)
            {
                Answer::create
                (
                    [
                        'question_id' => $question->id,
                        'title' => $faker->sentence,
                        'correct' => $corrects[$i]
                    ]
                );
            }
        }
    }

    private function generateBooleanCorrectsAnswer()
    {
        $booleans = [];
        $position = rand(0,3);
        $booleans[$position] = true;

        for ($i = 0;$i < 4;$i++)
        {
            if ($i != $position)
            {
                $booleans[$i] = false;
            }
        }

        return $booleans;
    }
}
