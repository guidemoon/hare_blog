<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Post extends Model
{
    use HasFactory;

    public Function user()
    {
        return $this->belongsTo(User::class);
    }
}
