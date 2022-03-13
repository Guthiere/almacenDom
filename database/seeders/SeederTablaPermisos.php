<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permisos=[
            //roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //Cargos
            'ver-cargo',
            'crear-cargo',
            'editar-cargo',
            'borrar-cargo',
            //departamento
            'ver-departamento',
            'crear-departamento',
            'editar-departamento',
            'borrar-departamento',
            //ubicacion
            'ver-ubicacion',
            'crear-ubicacion',
            'editar-ubicacion',
            'borrar-ubicacion',
            //Tecnologia
            'ver-tecnologia',
            'crear-tecnologia',
            'editar-tecnologia',
            'borrar-tecnologia',
            //Empleado
            'ver-empleado',
            'crear-empleado',
            'editar-empleado',
            'borrar-empleado',
        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
