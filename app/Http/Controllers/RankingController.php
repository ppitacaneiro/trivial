<?php

namespace App\Http\Controllers;

use App\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function store(Request $request) 
    {
        $data = $request->all();
        $ranking = Ranking::create(
            [
                'player_id' => $data['player_id'],
                'category_id' => $data['category_id'],
                'hits' => $data['hits'],
                'errors' => $data['errors'],
                'score' => $data['score'],
                'time' => $data['time'],
                'register_at_date' => $data['register_at_date'],
                'register_at_time' => $data['register_at_time'] 
            ]
        );

        return response()->json($ranking,201);
    }
}
