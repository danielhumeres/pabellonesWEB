@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{url('pabellon/index')}}" class="btn btn-primary"> Pabellones</a>
                    <a href="{{url('medico/index')}}" class="btn btn-danger"> Medicos</a>
                    <a href="{{url('cirugia/index')}}" class="btn btn-success"> Cirugias</a>
                    <a href="{{url('detallecirugia/create')}}" class="btn btn-info"> Detalle Cirugias</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
