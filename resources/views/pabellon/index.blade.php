@extends('layouts.app')

@section('content')
@if(session('status'))

<div class="alert alert-success">
    {{session('status')}}
</div>

@endif
<a href="{{url('home')}}" class="btn btn-danger">Volver</a>
<a href="{{url('/pabellon/create')}}" class="btn btn-success"> Nuevo pabellon</a>

<table class="table table-striped">
    <thead>
    <tr>
        <td>numero pabellon</td>
        <td>estado</td>
        <td colspan="2">acciones</td>
    </tr>
</thead>
<tbody>
@foreach ($pabellones as $pab)
<tr>
    <td>{{$pab->numPabellon}}</td>
    <td>{{$pab->estado}}</td>
    <td><a href="{{action('PabellonController@edit',$pab->numPabellon)}}" class="btn btn-primary"> Modificar</a></td>
    <td><a href="{{action('PabellonController@destroy',$pab->numPabellon)}}" class="btn btn-danger"> Eliminar</td>
</tr>
@endforeach

</tbody>
</table>

@endsection