@extends('layouts.inicio')
@section('title', 'Ventas')

@section('tit-section')
    Ventas
@endsection

@section('btn_navegar')
    <a href="/articulo" class="nav-item nav-link ">Articulos</a>
    <a href="/venta" class="nav-item nav-link active">Ventas</a>
    <a href="/users" class="nav-item nav-link">Usuarios</a>  
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
         <a href="/venta/create" class="nav-item nav-link " id="create-new"><i class="fa-solid fa-cart-plus"></i></i>&nbsp; Agregar Nuevo </a>
    </div>
</div>
    <div class='jumbotrom' id='table-content'>                
        <table class="table" id='tabla'>
            <thead>
                <tr class='col-name'>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>   
                    <th scope="col">Articulos</th>
                    <th scope="col">Cantidad</th> 
                    <th scope="col">Total</th>                     
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ventas as $dato)                                    
            <tr class='col-text'>
                <th scope="row">{{$dato->id}}</th>
                <td>{{$dato->name}}</td>
                <td>
                    @foreach($dato->articulos as $art)
                    {{$art->nombre}} <br>
                    @endforeach
                </td>
                <td>
                    @foreach($dato->articulos as $art)
                    {{$art->pivot->cantidad}} <br>
                    @endforeach
                </td>
                <td>{{$dato->monto_total}}</td>                                
                <td>
                   <a href="{{ route('venta.edit', $dato->id) }} " class=" btn-primary" id='edit'>Editar</a>
                    <form action="/venta/{{$dato->id}}" method="post">
                        @method('DELETE')
                        <button type="submit" class=" btn-danger" id='del'>Eliminar</button>
                        @csrf
                    </form>
                    <a href="{{ route('pdf1', $dato->id) }}" class="btn-primary" id="btn-pdf">Detalles PDF</a>
                </td>
            </tr>                
            @endforeach        
            </tbody>
        </table>
        </ul>
    </div> 
@endsection