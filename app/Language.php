<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $table = "language";
	public $timestamps = false;
    protected $primaryKey = "code";
    public $incrementing = false;

    public static function languageCodeExists($code) {
    	return Language::where('code', $code)->get()->count();
    }
}
