<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'access_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function Livings()
    {
        return $this->hasMany(Living::class);
    }
    public function Kitchens()
    {
        return $this->hasMany(Kitchen::class);
    }
    public function Garages()
    {
        return $this->hasMany(Garage::class);
    }
    public function Gardens()
    {
        return $this->hasMany(Garden::class);
    }
    public function Entrances()
    {
        return $this->hasMany(Entrance::class);
    }
}
