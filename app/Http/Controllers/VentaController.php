<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\User;
use App\Models\Articulo;

class VentaController extends Controller
{
    public function index()
    {
        $articulos=Articulo::all(); 
        $ventas=Venta::join('users', 'ventas.user_id', '=', 'users.id')
        ->select('ventas.id','ventas.monto_total','users.name')
        ->with('articulos')
        ->get();

        return view('venta.index',compact('ventas','articulos'));
    }

    public function create()
    {
        $usuarios=User::pluck('name', 'id'); // select * from ventas  
        //$articulos=Articulo::pluck( 'id','nombre');
        $articulos=Articulo::all();                
        return view('venta.create',compact('usuarios','articulos'));
    }

    public function store(Request $request)
    {        
        $collection=collect($request->all());
        //$keyed = $collection->keyBy('id')->get('');
        
        
        $vent=new Venta();        
        $vent->user_id=5;
        $vent->monto_total=$collection->sum('total');         
        $vent->save(); 
        
        foreach($collection as $dato){
        
            $vent->articulos()->attach($dato['id'],
                            [
                                'cantidad'=>$dato['cantidad'],
                                'costo'=>$dato['costo'],
                                'total'=>$dato['total']
                            ]);                

            $art=Articulo::find($dato['id']);
            $art->stock=$art->stock-$dato['cantidad'];
            $art->save();
        }
        
    }
    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $ventas=Venta::find($id);
        return view('venta.edit',compact('ventas'));
    }
    
    public function update(Request $request, $id)
    {
        Articulo::find($id)->update($request->all());
        return redirect()->route('venta.index');        
    }


    public function destroy($id)
    {        
        $dato=Venta::find($id)->delete();        
        return redirect()->route('venta.index');
    }
}
