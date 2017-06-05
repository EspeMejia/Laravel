<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = ['fecha_hora', 'doctor_id', 'paciente_id'];

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
    public function factura(){
        return $this -> hasOne('App\factura');
    }

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
