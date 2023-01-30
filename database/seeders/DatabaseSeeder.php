<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Venta;
use \App\Models\Articulo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // creamos 100 usuarios
        User::factory(8)->create();

        //crear articulos
        $articulos=[
            ['nombre'=>'papa frita','precio'=>10,'stock'=>56,'color'=>'amarillo','descripcion'=>'ninguna'],
            ['nombre'=>'pipoca','precio'=>8,'stock'=>89,'color'=>'blanco','descripcion'=>'pipoca premium'],
            ['nombre'=>'Soda Pepsi','precio'=>8,'stock'=>34, 'color'=>'negro','descripcion'=>'pespi de un litro'],
            ['nombre'=>'Vino Campos de Solano', 'precio'=>31,'stock'=>90,'color'=>'negro','descripcion'=>'Tinto'],
            ['nombre'=>'Mantequilla','precio'=>15.5,'stock'=>500, 'color'=>'crema','descripcion'=>'Regia'],
        ];
        foreach($articulos as $articulo){
            Articulo::create($articulo);
        }

        //crear ventas
        $ventas=[
            ['user_id'=>1,'monto_total'=>100], //papa frita id=1
            ['user_id'=>3,'monto_total'=>310], //vino id=4
            ['user_id'=>4,'monto_total'=>96], //pipoca id=2
        ];
        foreach($ventas as $venta){
            Venta::create($venta);
        }
        
        
        Venta::find(1)->articulos()->attach([
            1 => ['costo' => 8,'cantidad'=> 10,'total'=> 80],
            2 => ['costo' => 8,'cantidad'=> 10,'total'=> 80],
        ]);

        Venta::find(2)->articulos()->attach([
            1 => ['costo' => 8,'cantidad'=> 10,'total'=> 80],
            4 => ['costo' => 7,'cantidad'=> 7,'total'=> 49],
        ]);

        Venta::find(3)->articulos()->attach([
            1 => ['costo' => 8,'cantidad'=> 10,'total'=> 80],
            4 => ['costo' => 7,'cantidad'=> 7,'total'=> 49],
            5 => ['costo' => 100,'cantidad'=> 20,'total'=> 2000],
        ]);

        //Articulo::factory(30)->create();
        //Venta::factory(30)->create();
    }
}
