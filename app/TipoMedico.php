<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMedico extends Model
{
    protected $table = 'tipomedico';
    public $timestamps = false;
    protected $fillable = ['descripcion'];
    protected $primaryKey = 'idTipoMedico';
}
?>