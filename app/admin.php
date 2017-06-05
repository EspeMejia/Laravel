<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = ['phone'];
    public function secretarias(){
        return $this -> hasOne('App\secretaria');
    }
    public function medicos(){
        return $this -> hasMany('App\Doctor');
    }
    public function facturas(){
        return $this -> hasMany('App\factura');
    }
    public function users(){
        return $this -> belongsTo('App\User');
    }
}
