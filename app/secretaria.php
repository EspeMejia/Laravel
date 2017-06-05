<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class secretaria extends Model
{
    protected $fillable = ['address', 'fechanacimiento'];
    public function facturas(){
        return $this -> hasMany('App\factura');
    }
    public function users(){
        return $this -> belongsTo('App\User');
    }
}
