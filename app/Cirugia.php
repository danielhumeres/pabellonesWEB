<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cirugia extends Model
{
    protected $table = 'cirugia';
    public $timestamps = false;
    protected $fillable = ['nombrePaciente', 'fechaHorarioInicio', 'fechaHorarioTermino'];

}
