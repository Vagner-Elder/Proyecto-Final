<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable=['user_id','monto_total'];


    public function articulos(){
        return $this->belongsToMany(Articulo::class)->withPivot('costo', 'cantidad', 'total');
    }
    
}
