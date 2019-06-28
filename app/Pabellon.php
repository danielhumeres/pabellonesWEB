<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pabellon extends Model
{
    protected $table = 'pabellon';
    public $timestamps = false;
    protected $fillable = ['numPabellon', 'estado'];
}
?>