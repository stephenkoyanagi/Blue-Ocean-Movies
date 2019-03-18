<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public $table = "country";
	public $timestamps = false;
    protected $primaryKey = "code";
    public $incrementing = false;
}
