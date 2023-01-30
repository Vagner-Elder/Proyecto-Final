<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Venta;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable=['nombre','color','descripcion','precio','stock'];

    //relacion de muchos a muchos
    //entre ARTICULO tiene muchas ventas
    public function ventas()
    {
        return $this->belongsToMany(Venta::class)->withPivot('costo', 'cantidad', 'total');
    }
}
