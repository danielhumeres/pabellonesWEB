@extends('layouts.app')

@section('content')

<a href="{{url('cirugia/index')}}" class="btn btn-danger">Volver</a>

<div class="container">
<div class="row">
    <form action="{{action('CirugiaController@update', $idCirugia)}}" method="POST">
        <div class="form-group">
            <label for="Nombre Paciente"> Nombre Paciente</label>
        <input type="hidden" value="{{csrf_token()}}" name="_token">
        <input type="text" name="nombrePaciente" class="form-control" value="{{$cirugia->nombrePaciente}}">
        </div>
        <div class="form-group">
            <label for="Fecha y hora de inicio"> Fecha y hora de inicio</label>
            <input type="datetime-local" name="fechaHorarioInicio" class="form-control" value="{{$cirugia->fechaHorarioInicio}}">
        </div>
        <div class="form-group">
            <label for="Fecha y hora de termino"> Fecha y hora de término</label>
            <input type="datetime-local" name="fechaHorarioTermino" class="form-control" value="{{$cirugia->fechaHorarioTermino}}">
        </div>
        <div class="form-group">
            <label for="Numero de pabellon">Número de pabellon</label>
            <select name="Pabellon_NumPabellon" class="form-control" required="required">
                   
                <option  value="{{$cirugia->Pabellon_NumPabellon}}"></option>
                    
                </select>
         
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default"> Grabar </button>
        </div>

    </form>    
</div>    

</div> 



@endsection