<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use Illuminate\Http\Request;

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
}
