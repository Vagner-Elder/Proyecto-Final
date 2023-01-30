@extends('layouts.inicio')
@section('title', 'Usuarios')

@section('tit-section')
    Usuarios
@endsection

@section('btn_navegar')
    <a href="/articulo" class="nav-item nav-link">Articulos</a>
    <a href="/venta" class="nav-item nav-link">Ventas</a>
    <a href="/users" class="nav-item nav-link active">Usuarios</a>  
    <a href="{{route('logout')}}" class="nav-item nav-link ">Cerrar Sesion <i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
@endsection
 

@section('content')
<div class="div-index">
    <div id="div1" class="nav-item nav-link">
        <p class="nav-item nav-link" id="create-new1">Bienvenido &nbsp; @auth
           "{{Auth::user()->name}}"
          @endauth</p>
    </div>

    <div id="div2" class="nav-item nav-link">
         <a href="/users/create" class="nav-item nav-link " id="create-new"><i class="fa-sharp fa-solid fa-user-plus"></i>&nbsp; Agregar Nuevo </a>
    </div>
</div>
    <div class='jumbotrom' id='table-content'>      
        <table class="table" id='tabla'>
            <thead>
                <tr class='col-name'>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
        @foreach($usuarios as $dato)                                    
            <tr class='col-text'>
                <th scope="row">{{$dato->id}}</th>
                <td>{{$dato->name}}</td>
                <td>{{$dato->email}}</td>
                <td>{{$dato->password}}</td>
                <td>
                    
                    <a href="{{ route('users.edit', $dato->id) }} " class="btn-primary" id='edit'>Editar</a>                    

                    <form action="/users/{{$dato->id}}" method="post">
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