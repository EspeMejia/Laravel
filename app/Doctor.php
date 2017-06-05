<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['numcolegiado'];

    public function pacientes(){
        return $this -> hasMany('App\Paciente');
    }
    public function users(){
        return $this -> belongsTo('App\User');
    }
    public function citas()
    {
        return $this->hasMany('App\Cita');
    }
    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }

}
