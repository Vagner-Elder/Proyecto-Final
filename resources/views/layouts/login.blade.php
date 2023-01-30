@extends('layouts.inicio')
@section('title', 'Login')

@section('tit-section')
UPDS
@endsection

@section('content')
    <div class="col-md-7">
        <h2>Proyecto UPDS</h2>
        <br>
        <h2>Ventas <span>Articulos</span></h2>
    </div>
    <div class="col-md-5">
        <div class="form">
            <h3>Iniciar Sesion</h3>
                <form method="POST" action="{{route('inicio')}}">
                    @csrf
                    <input class="form-control" type="text" placeholder="Nombre" name="email">
                    <input class="form-control" type="password" placeholder="Contraseña" name="password">
                        <div class="control-group"> </div>
                        <button type="submit" class="btn btn-primary">Acceder</button>
                </form>
        </div>
    </div>
@endsection