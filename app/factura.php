<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{

    protected $fillable = ['total', 'cita_id','lineafactura_id'];

    public function cita(){
        return $this -> belongsTo('App\Cita');
    }
    public function lineafacturas(){
        return $this -> hasMany('App\Lineafactura');
    }

}
