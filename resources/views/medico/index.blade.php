@extends('layouts.app')

@section('content')
@if(session('status'))

<div class="alert alert-success">
    {{session('status')}}
</div>

@endif
<a href="{{url('home')}}" class="btn btn-danger">Volver</a>

<table class="table table-striped">
    <thead>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Tipo </td>        
    </tr>
</thead>
<tbody>
@foreach ($medicos as $med)
<tr>
    <td>{{$med->idMedico}}</td>
    <td>{{$med->nombre}}</td>
    <td>{{$med->apellido}}</td>
    <td>{{$med->TipoMedico_idTipoMedico}}</td>

</tr>
@endforeach

</tbody>
</table>

@endsection