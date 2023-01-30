@extends('layouts.inicio')
@section('title', 'Crear Articulo')

@section('tit-section')
    Crear Articulos
@endsection
 
@section('btn_navegar')
    <a href="/articulo" class="nav-item nav-link active">Articulos</a>
    <a href="/venta" class="nav-item nav-link">Ventas</a>
    <a href="/users" class="nav-item nav-link">Usuarios</a>  
    <a href="{{route('logout')}}" class="nav-item nav-link ">Cerrar Sesion <i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
@endsection

@section('content')
<div class="div-index">
    <div id="div1" class="nav-item nav-link">
        <p class="nav-item nav-link" id="create-new1">Bienvenido &nbsp; @auth
           "{{Auth::user()->name}}"
          @endauth </p>
    </div>
</div>
<div class="col-md-7">
        <h2>Proyecto UPDS</h2>
        <br>
        <h2>Ventas <span>Articulos</span></h2>
</div>
    <div class='jumbotrom'>
        <form method="POST" action="/articulo" class='form-crear'>
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name='nombre' class="form-control" placeholder="Nombre">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Color:</label>
                <input type="text" name='color' class="form-control" placeholder="Color">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Precio:</label>
                <input type="text" name='precio' class="form-control" placeholder="Precio">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Stock:</label>
                <input type="text" name='stock' class="form-control" placeholder="Stock">
            </div>                   
            <div class="mb-3">
                <label class="form-label">Descripcion:</label>
                <textarea class="form-control" name='descripcion' rows="2"></textarea>            
            </div>                   
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>                   
        </form>
    </div> 
@endsection