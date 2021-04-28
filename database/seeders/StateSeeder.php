<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['name' => 'Acre', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Alagoas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Amapá', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Amazonas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Bahia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ceará', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Distrito Federal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Espírito Santo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Goiás', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Maranhão', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mato Grosso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mato Grosso do Sul', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Minas Gerais', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pará', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Paraíba', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Paraná', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pernambuco', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Piauí', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rio de Janeiro', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rio Grande do Norte', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rio Grande do Sul', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rondônia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Roraima', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Santa Catarina', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São Paulo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sergipe', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tocantins', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        DB::table('states')->insert($states);
    }
}
