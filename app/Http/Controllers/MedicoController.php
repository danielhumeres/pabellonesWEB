<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;

class MedicoController extends Controller
{

public function index()
{
    $medicos = Medico::all();
    return view('medico.index', compact('medicos'));
}

}

?>