<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Paises
        DB::table('Pais')->delete();
        DB::table('Pais')->insert([
            ['id'=>'1', 'nombre'=>'México'],
            ['id'=>'2', 'nombre'=>'Canada'],
            ['id'=>'3', 'nombre'=>'China'],
            ['id'=>'4', 'nombre'=>'Colombia'],
        ]);

        //Tareas
        DB::table('tareas_completadas')->delete();
        DB::table('tareas_completadas')->insert([
            ['id'=>'1', 'descripcion'=>'Terminar la prueba'],
            ['id'=>'2', 'descripcion'=>'Debuguear Codigo'],
            ['id'=>'3', 'descripcion'=>'Realizar Pruebas unitarias']
        ]);

        DB::table('tareas_pendientes')->delete();
        DB::table('tareas_pendientes')->insert([
            ['id'=>'1', 'descripcion'=>'Ir al banco'],
            ['id'=>'2', 'descripcion'=>'Realizar balance general'],
            ['id'=>'3', 'descripcion'=>'Ajustar metricas de diseño']
        ]);
    }
}
