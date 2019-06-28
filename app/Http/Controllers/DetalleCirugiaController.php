<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleCirugia;
class DetalleCirugiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleCirugias = DetalleCirugia::all();
        return view ('detallecirugia.index', compact('detalleCirugias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('detallecirugia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(['idDetalleCirugia' => 'required','Medico_IdMedico' => 'required','Cirugia_idCirugia' => 'required']);
        DetalleCirugia::create($request->all());
        return redirect()->route('detallecirugias')->with('status','Cirugia Creada');
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
    public function edit($idDetalleCirugia)
    {
        $detallecirugias = DetalleCirugia::find($idDetalleCirugia);
        return view('detallecirigua.edit', compact('detallecirugias', 'idDetalleCirugia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idDetalleCirugia)
    {
        request()->validate(['idDetalleCirugia' => 'required','Medico_IdMedico' => 'required','Cirugia_idCirugia' => 'required']);
        DetalleCirugia::find('$idDetalleCirugia')->update($request->all());
        return redirect()->route('detallecirugias/store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idDetalleCirugia)
    {
        DetalleCirugia::find($idDetalleCirugia)->delete();
        return redirect()->route('detallecirugias')->with('status','Cirugia Eliminada');
    }
}
