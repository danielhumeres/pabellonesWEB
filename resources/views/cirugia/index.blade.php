@extends('layouts.app')

@section('content')
@if(session('status'))

<div class="alert alert-success">
    {{session('status')}}
</div>

@endif
<a href="{{url('home')}}" class="btn btn-danger">Volver</a>
<a href="{{url('/cirugia/create')}}" class="btn btn-success"> Nueva Cirugia</a>


<table class="table table-striped">
    <thead>
    <tr>
        <td>ID</td>
        <td>Nombre Paciente</td>
        <td>Fecha Inicio</td>
        <td>Fecha Termino</td>  
        <td>Numero Pabellon</td>   
        <td colspan="2">acciones</td>    
    </tr>
</thead>
<tbody>
@foreach ($cirugias as $cir)
<tr>
    <td>{{$cir->idCirugia}}</td>
    <td>{{$cir->nombrePaciente}}</td>
    <td>{{$cir->fechaHorarioInicio}}</td>
    <td>{{$cir->fechaHorarioTermino}}</td>
    <td>{{$cir->Pabellon_NumPabellon}}</td>
    <td><a href="{{action('CirugiaController@edit',$cir->idCirugia)}}" class="btn btn-primary"> Modificar</a></td>
    <td><a href="{{action('CirugiaController@destroy',$cir->idCirugia)}}" class="btn btn-danger"> Eliminar</td>

</tr>
@endforeach

</tbody>
</table>

@endsection