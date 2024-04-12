<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            array( 
                'nombre' =>  "Boligrafos Bic",
                'precio' => 99.9,
                'imagen' => "bol1",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Boligrafos Paper Mate",
                'precio' => 99.9,
                'imagen' => "bol2",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Boligrafos Office DEPOT",
                'precio' => 99.9,
                'imagen' => "bol3",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Marcadores Sharpie Original",
                'precio' => 99.9,
                'imagen' => "plu1",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Marcadores Sharpie Colores",
                'precio' => 99.9,
                'imagen' => "plu2",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Marcadores Sharpie Clasicos",
                'precio' => 99.9,
                'imagen' => "plu3",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Borradores MAE",
                'precio' => 99.9,
                'imagen' => "bor1",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Borradores ERASER",
                'precio' => 99.9,
                'imagen' => "bor2",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Borradores Paper Mate",
                'precio' => 99.9,
                'imagen' => "bor3",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Borradores Pelikan",
                'precio' => 99.9,
                'imagen' => "bor4",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Lapices Paper Mate",
                'precio' => 99.9,
                'imagen' => "lap1",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Lapices Paper Mate Mina Obscura",
                'precio' => 99.9,
                'imagen' => "lap2",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Lapices Economicos",
                'precio' => 99.9,
                'imagen' => "lap3",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Lapices BIC",
                'precio' => 59.9,
                'imagen' => "lap4",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Adhesivos Pritt",
                'precio' => 39.9,
                'imagen' => "res1",
                'categoria_id' =>5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Adhesivos Elmer's",
                'precio' => 39.9,
                'imagen' => "res2",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Adhesivo Dixon",
                'precio' => 19.9,
                'imagen' => "res3",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            
        ];

        DB::table('productos')->insert($datos);
    }
}
