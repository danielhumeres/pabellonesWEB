@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <form action="{{url('/pabellon/store')}}" method="POST">
        <div class="form-group">
            <label for="Numero Pabellon"> Numero Pabellon</label>
        <input type="hidden" value="{{csrf_token()}}" name="_token">
        <input type="text" name="numPabellon" class="form-control">
        </div>
        <div class="form-group">
            <label for="Estado"> Estado</label>
            <input type="text" name="estado" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default"> Grabar </button>
        </div>

    </form>    
</div>    

</div> 



@endsection