<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\TipoMedico;

class MedicoController extends Controller
{

public function index()
{
    $medicos = Medico::all();
    $tipo = TipoMedico::all();
  
    return view('medico.index', compact('medicos' ,'tipo'));
}

}

?>