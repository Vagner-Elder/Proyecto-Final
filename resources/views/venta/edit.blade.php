@extends('layouts.inicio')
@section('title', 'Editar Ventas')

@section('tit-section')
    Editar Ventas
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

        <form method="POST" action="{{ route('venta.update', $ventas->id) }}" class='form-crear'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="_method" value="PUT" />
                    
            <div class="mb-3">
                <label class="form-label">Nombre:</label>                
                <input type="text" name="user_id" class="form-control" value="{{ $ventas->user_id}}"  placeholder="Nombre"/>

            </div>                   
            <div class="mb-3">
                <label class="form-label">Monto:</label>
                <input type="text" name="monto_total" class="form-control" value="{{ $ventas->monto_total}}"  placeholder="Monto"/>                
            </div>                            
            <div class="mb-3">
                <input type="submit" class="btn btn-secondary" value="Actualizar">
            </div>                   
        </form>
        
 
    </div> 
@endsection
    