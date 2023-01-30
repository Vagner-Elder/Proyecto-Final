<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .tit-detalle{
       width:100%;
    }
    .filas{
        width:25%;
        color:#FFD662;
        font-size:25px;
        font-weight:700;
        text-align:center;
        background-color:#00539C ;
    }
    .col{
        width:25%;
        color:#00539C;
        font-size:20px;
        text-align:center;
    }
    .col-es{
        margin-top:15px;
    }
</style>
<body>

    
    <table class="tit-detalle" > 
        <th>
            <tr>
                <td class="filas">Id</td>
                <td class="filas">Nombre</td>
                <td class="filas">Cantidad</td>
                <td class="filas">Precio</td>
                <td class="filas">Total</td>
            </tr>

        </th>
        <tbody>
  
            @foreach($detalles as $detalle)
            
                <tr class="col-es">
                    <td class="col">{{$detalle->id}}</td>
                    <td class="col">{{$detalle->nombre}}</td>
                    <td class="col">{{$detalle->pivot->cantidad}}</td>
                    <td class="col">{{$detalle->precio}}</td>     
                    <td class="col">{{$detalle->pivot->total}}</td>               
                </tr>


            @endforeach
            
        </tbody>

    </table>
        
    
    
</body>
</html>