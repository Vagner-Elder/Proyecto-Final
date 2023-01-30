@extends('layouts.inicio')
@section('title', 'ARTICULO')

@section('tit-section')
    Articulos
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

    <div id="div2" class="nav-item nav-link">
         <a href="/articulo/create" class="nav-item nav-link " id="create-new"><i class="fa-solid fa-circle-plus"></i>&nbsp; Agregar Nuevo </a>
    </div>
</div>
    <div class='jumbotrom' id='table-content'>      
        <table class="table" id='tabla'>
            <thead>
                <tr class='col-name'>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Color</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
        @foreach($articulos as $articulo)                                    
            <tr class='col-text'>
                <th scope="row">{{$articulo->id}}</th>
                <td>{{$articulo->nombre}}</td>
                <td>{{$articulo->precio}}</td>
                <td>{{$articulo->color}}</td>
                <td>{{$articulo->stock}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>
                    
                    <a href="{{ route('articulo.edit', $articulo->id) }} " class="btn-primary" id='edit'>Editar</a>                    

                    <form action="/articulo/{{$articulo->id}}" method="post">
                        @method('DELETE')
                        <button type="submit" class=" btn-danger" id='del'>Eliminar</button>
                        @csrf
                    </form>
                    
                
                </td>
            </tr>                
        @endforeach        
            </tbody>
        </table>
    </div> 
@endsection