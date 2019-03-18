<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
	public $table = "genre";
	public $timestamps = false;
    protected $primaryKey = "id";
    public $incrementing = false;

    public static function getGenreName($id)
    {
    	return Genre::where('id', $id)->get()->name;
    }

    public static function getGenreId($name)
    {
    	return Genre::where('name', $name)->get()->id;
    }
}
