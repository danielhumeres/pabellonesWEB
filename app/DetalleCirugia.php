<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCirugia extends Model
{
    protected $table = 'detallecirugia';
    public $timestamps = false;
    protected $primaryKey = 'idDetalleCirugia';

}
