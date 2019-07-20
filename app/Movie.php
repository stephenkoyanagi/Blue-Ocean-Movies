<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MovieGenre;
use App\User;

class Movie extends Model
{
    public function genres()
    {
        return $this->hasMany(MovieGenre::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
