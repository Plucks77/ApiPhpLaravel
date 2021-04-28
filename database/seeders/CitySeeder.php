<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'Rio de Janeiro', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São Gonçalo', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Duque de Caxias', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Nova Iguaçu', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Niterói', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Belford Roxo', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Campos dos Goytacazes', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São João de Meriti', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Petrópolis', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Volta Redonda', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Macaé', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Magé', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Itaboraí', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cabo Frio', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Angra dos Reis', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Nova Friburgo', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Barra Mansa', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Teresópolis', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mesquita', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Maricá', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Nilópolis', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rio das Ostras', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Queimados', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Itaguaí', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Araruama', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Resende', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São Pedro da Aldeia', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Japeri', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Itaperuna', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Barra do Piraí', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Seropédica', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Saquarema', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Três Rios', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Valença', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Guapimirim', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rio Bonito', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cachoeiras de Macacu', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Paracambi', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mangaratiba', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Casimiro de Abreu', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Paraíba do Sul', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Paraty', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Santo Antônio de Pádua', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São Francisco de Itabapoana', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São Fidélis', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Bom Jesus do Itabapoana', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Vassouras', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São João da Barra', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tanguá', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Armação dos Búzios', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Itatiaia', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Arraial do Cabo', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Piraí', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Iguaba Grande', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Paty do Alferes', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Bom Jardim', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Miracema', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Miguel Pereira', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pinheiral', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quissamã', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Conceição de Macabu', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Itaocara', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cordeiro', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São José do Vale do Rio Preto', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Silva Jardim', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cantagalo', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Porto Real', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Carmo', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Porciúncula', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mendes', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rio Claro', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sapucaia', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Carapebus', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sumidouro', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cambuci', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Natividade', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Italva', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quatis', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Engenheiro Paulo de Frontin', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cardoso Moreira', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Areal', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Aperibé', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Duas Barras', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Varre-Sai', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Trajano de Moraes', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Santa Maria Madalena', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São Sebastião do Alto', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rio das Flores', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Comendador Levy Gasparian', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Laje do Muriaé', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'São José de Ubá', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Macuco', 'state_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ];

        DB::table('cities')->insert($cities);
    }
}
