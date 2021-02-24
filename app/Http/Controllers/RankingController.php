<?php

namespace App\Http\Controllers;

use App\Category;
use App\Player;
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

    public function index() {
        
        $rankings = Ranking::all()->sortByDesc('score');

        foreach ($rankings as $ranking) {

            $player = Player::find($ranking->player_id);
            $playerName = $player->nickname;

            $category = Category::find($ranking->category_id);
            $categoryName = $category->name;

            $dataRankings[] = array
            (
                'player_id' => $ranking->player_id,
                'player_name' => $playerName,
                'category_id' => $ranking->category_id,
                'category_name' => $categoryName,
                'hits' => $ranking->hits,
                'errors' => $ranking->errors,
                'score' => $ranking->score,
                'time' => $ranking->time,
                'register_at_date' => $ranking->register_at_date,
                'register_at_time' => $ranking->register_at_time,
            );
        }

        return response()->json($dataRankings,200);
    }
}
