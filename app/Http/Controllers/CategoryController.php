<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return response()->json($categories,200);
    }

    public function questions($categoryId)
    {
        $questions = Category::find($categoryId)->questions;

        return response()->json($questions,200);
    }

    public function questionsWithAnswers($categoryId)
    {
        $questions = Category::find($categoryId)->questions;

        foreach ($questions as $question)
        {
            $answers = Question::find($question->id)->answers()->get();

            $questionsAndAnswers[] = array
            (
                'id' => $question->id,
                'title' => $question->title,
                'answers' => $answers
            );
        }

        return response()->json($questionsAndAnswers,200);
    }
}
