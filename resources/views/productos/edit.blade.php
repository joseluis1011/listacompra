@extends('layouts.master')

@section('content')

@section('content')

Modificar producto {{$producto->id}}
<div class="row" style="margin-top:40px">
<div class="offset-md-3 col-md-6">
   <div class="card">
      <div class="card-header text-center">
         Modificar producto
      </div>
      <div class="card-body" style="padding:30px">

        <form action="{{ url('/productos/create') }}" method="POST">
            {{method_field('PUT')}}
            @csrf

         <div class="form-group">
            <label for="title">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}">
         </div>

         <div class="form-group">
            <label for="title">Precio</label>
           <input type="number" name="precio" id="{{ $producto->precio }}">
        </div>

        <div class="form-group">
            <label for="title">Categoria</label>
           <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $producto->categoria }}">
        </div>

        <div class="form-group">
            <label for="title">Imagen</label>
           <input type="text" name="imagen" id="imagen" class="form-control" value="{{ $producto->imagen }}">
        </div>

         <div class="form-group">
            <label for="synopsis">Descripcion</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
         </div>

         <div class="form-group text-center">
            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                Modificar producto
            </button>
         </div>

         {{-- TODO: Cerrar formulario --}}

      </div>
   </div>
</div>
</div>

@stop
22  resources/views/productos/index.blade.php
@@ -2,6 +2,26 @@

@section('content')

Listado productos
<div class="row">
@php
$key = 0;
@endphp
   @foreach( $producto as $producto )
       @php
           $key++;
       @endphp
   <div class="col-xs-6 col-sm-4 col-md-3 text-center">

       <a href="{{ url('/productos/show/' . $key ) }}">
           <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
           <h4 style="min-height:45px;margin:5px 0 10px 0">
               $producto->campo
           </h4>
       </a>

   </div>
   @endforeach

</div>

@stop

@stop
