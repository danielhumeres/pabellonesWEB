<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pabellon;

class PabellonController extends Controller
{
    

public function index()
{
    $pabellones = Pabellon::all();
    return view('pabellon.index', compact('pabellones'));
}

public function create()
{
    return view('pabellon.create');
}

public function store (Request $request)
{
    request()->validate(['numPabellon'=> 'required' , 'estado'=>'required']);
    Pabellon::create($request->all());
    return redirect()->route('pabellones')->with('status','Pabellon Creado');
}

public function edit($numPabellon)
{
    $pabellon = Pabellon::find($numPabellon);
    return view('pabellones.edit', compact('pabellon', 'numPabellon'));
}


public function update(Request $request, $numPabellon)
{
    request()->validate(['numPabellon'=> 'required' , 'estado'=>'required']);
    Pabellon::find($numPabellon)->update($request->all());
    return redirect()->route('pabellones')->with('status','Pabellon Actualizado');
}

public function destroy($numPabellon)
{
    Pabellon::find($numPabellon)->delete();
    return redirect()->route('pabellones')->with('status','Pabellon Eliminado');
}

}
