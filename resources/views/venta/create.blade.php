@extends('layouts.inicio')
@section('title', 'Crear Ventas')

@section('tit-section')
    Crear Ventas
@endsection
 
@section('btn_navegar')
    <a href="/articulo" class="nav-item nav-link " >Articulos</a>
    <a href="/venta" class="nav-item nav-link active">Ventas</a>
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
    <div id="app">

        
        <div class='jumbotrom'>        
            
            <form @submit.prevent="enviar" class="form-creat-venta">
                @csrf
                <div class="mb-3" id="form-cv">
                    <label class="form-label">Nombre del comprador</label>
                        {{Form::select('user_id',$usuarios , null, ['class' => 'form-control'])}} 
                        <div class="row" id="div-tit">
                            <div class="col">
                                Producto
                            </div>
                            <div class="col">
                                Cantidad
                            </div>
                            <div class="col">
                                Costo
                            </div>
                            <div class="col">
                                Total
                            </div>
                        </div>    
                        @foreach ($articulos as $i=>$dato)   
                        
                        <div class="row">
                            <div class="col p-1">
                                <button type="button" class="btn btn-secondary position-relative">
                                    {{$dato->nombre}}
                                    <span class="position-absolute top-0 start-100 translate-middle p-2  rounded-circle">
                                        <span class="badge text-bg-dark">{{$dato->stock}}</span>
                                    </span>
                                </button>
                                
                                {{ Form::checkbox('articulos[]',$dato->id,['class'=>'form-control'])}}
                                                                
                            </div>
                            <div class="col">                                
                                <input v-model="articles[{{$i}}].cantidad" 
                                v-on:change="calcularPrecio(articles[{{$i}}],articles[{{$i}}].cantidad,articles[{{$i}}].costo)" 
                                type="number" name="cantidad{{ $dato->id }}">
                            </div>
                            <div class="col">                                                                
                                <input v-model="articles[{{$i}}].costo" 
                                v-on:change="calcularPrecio(articles[{{$i}}],articles[{{$i}}].cantidad,articles[{{$i}}].costo)" 
                                type="text" name="precio{{$dato->id}}">
                            </div>
                            <div class="col">                     
                                <input v-model="articles[{{$i}}].total"
                                type="text" disabled>
                            </div>
                        </div>                                                            
                        @endforeach
                        <div class="row">
                            <h2>                                
                                <div class="col-10 text-end" id="div-total">
                                    Total:
                                </div>
                            </h2>
                        </div>                                                        
                </div>                   
                
                <div class="mb-3" id="btn-env">                                       
                   <input type="submit" id="edit" role="link" onclick="location.href='/venta';">
                </div> 

            </form>
        </div> 

        
    </div>

<script>
    new Vue({
        el: '#app',
        data: {                     
            articles: [
                @foreach($articulos as $articulo)
                { 
                    id: {{$articulo->id}},
                    nombre: "{{$articulo->nombre}}",
                    stock: {{$articulo->stock}},
                    costo: {{$articulo->precio}},
                    cantidad: 0,                    
                    total:0,
                },
                @endforeach
            ],
            devolucion:[],
        },
        methods: {
            calcularPrecio(i,cant,prec) {
                i.total=cant*prec;
                //this.articles['total']=cant;
            },
            enviar(){                
                
                axios.post('/venta',this.articles)
                .then(response => {                
                    this.devolucion=response.data
                })
                .catch(err => { 
                    // error 
                })
            }
        },
        computed:{
            calcularstock(){
                return 3*3;
            }
        }                        

    });
</script>
@endsection