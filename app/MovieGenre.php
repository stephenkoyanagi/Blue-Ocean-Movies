<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Genre;

class MovieGenre extends Model
{
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
