@extends('layouts.app')

@section('content')
<a href="{{url('pabellon/index')}}" class="btn btn-danger">Volver</a>
<div class="container">
<div class="row">
    <!-- action para enviar datos por url-->
    <form action="{{action('PabellonController@update', $numPabellon)}}" method="POST">
        <div class="form-group">
            <label for="Numero Pabellon"> Numero Pabellon </label>
        <input type="hidden" value="{{csrf_token()}}" name="_token">
        <input type="text" name="numPabellon" class="form-control" value="{{$pabellon->numPabellon}}">
        </div>
        <div class="form-group">
            <label for="Estado"> Estado </label>
            <input type="text" name="estado" class="form-control" value="{{$pabellon->estado}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default"> Grabar </button>
        </div>

    </form>    
</div>    

</div> 



@endsection