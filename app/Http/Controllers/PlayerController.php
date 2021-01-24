<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function store(Request $request) 
    {
        $data = $request->all();
        $player = Player::create(
            [
                'nickname' => $data['nickname'],
                'email' => $data['email'],
                'age' => $data['age'],
                'sex' => $data['sex']
            ]
        );

        return response()->json($player,201);
    }
}
