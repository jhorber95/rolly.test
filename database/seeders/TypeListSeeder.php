<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypeListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_list')->insert([
            ['id' => 1, 'name' => 'tipo identificación', 'parent_id' => null],
            ['id' => 2, 'name' => 'tipo tercero', 'parent_id' => null],
            ['id' => 3, 'name' => 'Departamento', 'parent_id' => null],
            ['id' => 4, 'name' => 'Ciudad', 'parent_id' => 3],
            ['id' => 5, 'name' => 'Tipo contribuyente', 'parent_id' => null],
        ]);
    }
}
