<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineafactura extends Model
{
    protected $fillable = ['cantidad','subtotal','producto_id'];

    public function productos(){
        return $this -> hasMany('App\Producto');
    }
    public function facturas(){
        return $this -> belongsTo('App\factura');
    }
}
