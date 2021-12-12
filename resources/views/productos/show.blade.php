@extends('layouts.master')

@section('content')

    Vista producto {{ $id }}

    <div class="row">

        <div class="col-sm-4">


        </div>
        <div class="col-sm-8">

        </div>
        <div class="col-sm-8">

            <p>Nombre: {{ $producto[0] }}</p>
            <p>Categoría: {{ $producto[1] }}</p>


                <a class="btn btn-primary" href="#">Esta comprado</a>

            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $id) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar Producto</a>
            <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>

        </div>
    </div>


        </div>
    </div>
@stop
