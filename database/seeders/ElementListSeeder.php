<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('element_list')->insert([
            [
                'id' => 1,
                'name' => 'Cedula de ciudadania',
                'parent_id' => null,
                'type_list_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Tarjeta de identidad',
                'parent_id' => null,
                'type_list_id' => 1
            ],[
                'id' => 3,
                'name' => 'NIT',
                'parent_id' => null,
                'type_list_id' => 1
            ],[
                'id' => 4,
                'name' => 'Gran contribuyente',
                'parent_id' => null,
                'type_list_id' => 5
            ],[
                'id' => 5,
                'name' => 'Responsable de IVA',
                'parent_id' => null,
                'type_list_id' => 5
            ],[
                'id' => 6,
                'name' => 'Regimen especial',
                'parent_id' => null,
                'type_list_id' => 5
            ],[
                'id' => 7,
                'name' => 'Otro',
                'parent_id' => null,
                'type_list_id' => 5
            ],[
                'id' => 8,
                'name' => 'Huila',
                'parent_id' => null,
                'type_list_id' => 3
            ],[
                'id' => 9,
                'name' => 'Tolima',
                'parent_id' => null,
                'type_list_id' => 3
            ],[
                'id' => 10,
                'name' => 'Neiva',
                'parent_id' => 8,
                'type_list_id' => 4
            ],[
                'id' => 11,
                'name' => 'Ibague',
                'parent_id' => 9,
                'type_list_id' => 4
            ]
        ]);
    }
}
