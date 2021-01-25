<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','category_id'];

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}
