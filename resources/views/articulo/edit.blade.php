@extends('layouts.inicio')
@section('title', 'Editar Articulo')

@section('tit-section')
    Editar Articulos
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

        <form method="POST" action="{{ route('articulo.update', $articulo->id) }}" class='form-crear'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="_method" value="PUT" />
                    
            <div class="mb-3">
                <label class="form-label">Nombre:</label>                
                <input type="text" name="nombre" class="form-control" value="{{ $articulo->nombre}}"  placeholder="Nombre"/>

            </div>                   
            <div class="mb-3">
                <label class="form-label">Color:</label>
                <input type="text" name="color" class="form-control" value="{{ $articulo->color}}"  placeholder="Color"/>                
            </div>                   
            <div class="mb-3">
                <label class="form-label">Precio:</label>
                <input type="text" name="precio" class="form-control" value="{{ $articulo->precio}}"  
                placeholder="Precio"/>                                
            </div>                   
            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="text" name="stock" class="form-control" value="{{ $articulo->stock}}"  placeholder="Stock"/>                
            </div>                   
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                
                <textarea class="form-control" rows="2" name="descripcion" value="{{ $articulo->descripcion}}"></textarea>
            </div>                   
            <div class="mb-3">
                <input type="submit" class="btn btn-secondary" value="Actualizar">
            </div>                   
        </form>
        
 
    </div> 
@endsection
    