<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Genre;
use App\Country;
use App\Language;

class User extends Authenticatable
{
    use Notifiable;


    public function genres()
    {
        return $this->hasMany('\App\Genre');
    }

    public function countries()
    {
        return $this->hasMany('\App\Country');
    }

    public function languages()
    {
        return $this->hasMany('\App\Language');
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
