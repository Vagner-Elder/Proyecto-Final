@extends('layouts.inicio')
@section('title', 'Crear Usuarios')

@section('tit-section')
    Editar Usuarios
@endsection
 
@section('btn_navegar')
    <a href="/articulo" class="nav-item nav-link ">Articulos</a>
    <a href="/venta" class="nav-item nav-link">Ventas</a>
    <a href="/users" class="nav-item nav-link active">Usuarios</a>  
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

        <form method="POST" action="{{ route('users.update', $usuarios->id) }}" class='form-crear'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="_method" value="PUT" />
                    
            <div class="mb-3">
                <label class="form-label">Nombre:</label>                
                <input type="text" name="name" class="form-control" value="{{ $usuarios->name}}"  placeholder="Nombre"/>

            </div>                   
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="text" name="email" class="form-control" value="{{ $usuarios->email}}"  placeholder="Color"/>                
            </div>                   
            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="password" name="password" class="form-control" value="{{ $usuarios->password}}"  
                placeholder="Precio"/>                                
            </div>                                    
            <div class="mb-3">
                <input type="submit" class="btn btn-secondary" value="Actualizar">
            </div>                   
        </form>
        
 
    </div> 
@endsection
    