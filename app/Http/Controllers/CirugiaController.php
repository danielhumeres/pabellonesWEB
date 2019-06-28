<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cirugia;
class CirugiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cirugias = Cirugia::all();
        return view ('cirugia.index' , compact('cirugias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cirugia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(['idCirugia' => 'required','nombrePaciente' => 'required','fechaHorarioInicio' => 'required','fechaHorarioTermino' => 'required','Pabellon_NumPabellon' => 'required',]);
        Cirugia::create($request->all());
        return redirect()->route('/detallecirugia/store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idCirugia)
    {
        $cirugia = Cirugia::find($idCirugia);
        return view('cirigua.edit', compact('cirugia', 'idCirugia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCirugia)
    {
        request()->validate(['idCirugia' => 'required','nombrePaciente' => 'required','fechaHorarioInicio' => 'required','fechaHorarioTermino' => 'required','Pabellon_NumPabellon' => 'required',]);
        Cirugia::find('$idCirugia')->update($request->all());
        return redirect()->route('/detallecirugia/store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCirugia)
    {
        Cirugia::find($idCirugia)->delete();
        return redirect()->route('cirugias')->with('status','Cirugia Eliminada');
    }
}
