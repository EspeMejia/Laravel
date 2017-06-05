<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['name','baseimponible','iva','total'];

    public function doctors(){
        return $this -> belongsTo('App\LineaFactura');
    }
}
