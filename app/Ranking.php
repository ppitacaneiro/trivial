<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $fillable = 
    [
        'player_id',
        'category_id',
        'hits',
        'errors',
        'score',
        'time',
        'register_at_date',
        'register_at_time'
    ];
}
