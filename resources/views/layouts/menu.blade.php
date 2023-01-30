@extends('layouts.inicio')
@section('title', 'Menu')

@section('tit-section')
    Proyecto UPDS
@endsection

@section('btn_navegar')
   <div  >
      <div id="div-icon-name" class="nav-item nav-link"><i class="fa-solid fa-user"></i></div>
      <div id="div-name-user" class="nav-item nav-link">
        <h3>
          @auth
            {{Auth::user()->name}}
          @endauth
        </h3>
      </div>
   </div>
   <a href="{{route('logout')}}" class="nav-item nav-link ">Cerrar Sesion <i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
@endsection

@section('content')
<div id="introblocks" class="bloce">
    <ul class="nospace group btmspace-80 elements elements-four" id="unic">
        <li class="one_quarter" id="ulf">
          <article><a href="/users"><i class="fas fa-user"></i></a>
            <h6 class="heading">USUARIOS</h6>
            <p>Crea, registra, actualiza y elimina usuarios.</p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="/articulo"><i class="fas fa-pen-to-square"></i></a>
            <h4 class="heading">ARTICULOS</h4>
            <p>Crea, registra, actualiza y elimina articulos.</p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="venta"><i class="fas fa-bag-shopping"></i></a>
            <h6 class="heading">VENTAS</h6>
            <p>Crea, registra, actualiza y elimina ventas.</p>
          </article>
        </li>       
    </ul>
</div>
@endsection