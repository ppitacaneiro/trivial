<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return response()->json($questions,200);
    }

    public function show($id)
    {
        $question = Question::find($id);

        return response()->json($question,200);
    }

}
