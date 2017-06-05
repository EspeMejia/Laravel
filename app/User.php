<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'dni'
    ];

    public function doctor(){
        return $this -> hasOne('App\doctor');
    }
    public function secretaria(){
        return $this -> hasOne('App\secretaria');
    }
    public function admin(){
        return $this -> hasOne('App\admin');
    }
    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }
    protected $hidden = [
        'password', 'remember_token',
    ];

}
