<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    
    public function index()
    {
        $articulos=Articulo::all();
        return view('articulo.index',compact('articulos'));
    }

    
    public function create()
    {
        return view('articulo.create');
    }

    public function store(Request $request)
    {
        //return $request->all()
        Articulo::create($request->all());
        //return Redirect::action('Articulo@index');        
        return redirect()->route('articulo.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $articulo=Articulo::find($id);
        return view('articulo.edit',compact('articulo'));
    }
    
    public function update(Request $request, $id)
    {
        Articulo::find($id)->update($request->all());
        return redirect()->route('articulo.index');        
    }


    public function destroy($id)
    {
        Articulo::find($id)->delete();
        return redirect()->route('articulo.index');
    }
}
