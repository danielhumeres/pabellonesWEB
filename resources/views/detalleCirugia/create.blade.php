@extends('layouts.app')

@section('content')

<a href="{{url('home')}}" class="btn btn-danger">Volver</a>

<div class="container">
<div class="row">
    <form action="{{url('/detallecirugia/store')}}" method="POST">
        <div class="form-group">
                <input type="hidden" readonly="readonly"  name="idDetalleCirugia">
            <label for="Nombre Paciente"> Nombre Paciente</label>
        <input type="hidden" value="{{csrf_token()}}" name="_token">
        <select name="nombrePaciente" class="form-control" required="required">
                @foreach ($cirugia as $cir)
            <option value="{{$cir['nombrePaciente']}}">{{$cir['nombrePaciente']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Nombre del pabellon">Nombre Doctor</label>
            <select name="nombre" class="form-control" required="required">
                    @foreach ($medico as $med)
                <option value="{{$med['nombre']}}">{{$med['nombre']}} {{$med['apellido']}}-{{$med['descripcion']}}</option>
                    @endforeach
                </select>
         
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default"> Grabar </button>
        </div>

    </form>    
</div>    

</div> 



@endsection