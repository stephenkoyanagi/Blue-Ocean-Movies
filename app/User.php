<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Genre;
use App\Country;
use App\Language;
use App\Movie;

class User extends Authenticatable
{
    use Notifiable;


    public function genres()
    {
        return $this->hasMany(Genre::class);
    }

    public function countries()
    {
        return $this->hasMany(Country::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
