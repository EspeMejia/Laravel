<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['name', 'surname', 'email','dni', 'fechanacimiento','doctor_id','nuhsa'];

    public function doctors(){
        return $this -> belongsTo('App\Doctor');
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
