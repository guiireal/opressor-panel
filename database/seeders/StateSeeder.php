<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run()
    {
        DB::table('states')->insert(array (
            0 =>
                array (
                    'id' => '1',
                    'name' => 'Acre',
                    'uf' => 'AC',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            1 =>
                array (
                    'id' => '2',
                    'name' => 'Alagoas',
                    'uf' => 'AL',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            2 =>
                array (
                    'id' => '3',
                    'name' => 'Amazonas',
                    'uf' => 'AM',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            3 =>
                array (
                    'id' => '4',
                    'name' => 'Amapa',
                    'uf' => 'AP',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            4 =>
                array (
                    'id' => '5',
                    'name' => 'Bahia',
                    'uf' => 'BA',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            5 =>
                array (
                    'id' => '6',
                    'name' => 'Ceara',
                    'uf' => 'CE',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            6 =>
                array (
                    'id' => '7',
                    'name' => 'Distrito Federal',
                    'uf' => 'DF',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            7 =>
                array (
                    'id' => '8',
                    'name' => 'Espirito Santo',
                    'uf' => 'ES',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            8 =>
                array (
                    'id' => '9',
                    'name' => 'Goias',
                    'uf' => 'GO',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            9 =>
                array (
                    'id' => '10',
                    'name' => 'Maranhao',
                    'uf' => 'MA',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            10 =>
                array (
                    'id' => '11',
                    'name' => 'Minas Gerais',
                    'uf' => 'MG',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            11 =>
                array (
                    'id' => '12',
                    'name' => 'Mato Grosso do Sul',
                    'uf' => 'MS',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            12 =>
                array (
                    'id' => '13',
                    'name' => 'Mato Grosso',
                    'uf' => 'MT',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            13 =>
                array (
                    'id' => '14',
                    'name' => 'Para',
                    'uf' => 'PA',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            14 =>
                array (
                    'id' => '15',
                    'name' => 'Paraiba',
                    'uf' => 'PB',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            15 =>
                array (
                    'id' => '16',
                    'name' => 'Pernambuco',
                    'uf' => 'PE',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            16 =>
                array (
                    'id' => '17',
                    'name' => 'Piaui',
                    'uf' => 'PI',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            17 =>
                array (
                    'id' => '18',
                    'name' => 'Parana',
                    'uf' => 'PR',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            18 =>
                array (
                    'id' => '19',
                    'name' => 'Rio de Janeiro',
                    'uf' => 'RJ',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            19 =>
                array (
                    'id' => '20',
                    'name' => 'Rio Grande do Norte',
                    'uf' => 'RN',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            20 =>
                array (
                    'id' => '21',
                    'name' => 'Rondonia',
                    'uf' => 'RO',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            21 =>
                array (
                    'id' => '22',
                    'name' => 'Roraima',
                    'uf' => 'RR',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            22 =>
                array (
                    'id' => '23',
                    'name' => 'Rio Grande do Sul',
                    'uf' => 'RS',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            23 =>
                array (
                    'id' => '24',
                    'name' => 'Santa Catarina',
                    'uf' => 'SC',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            24 =>
                array (
                    'id' => '25',
                    'name' => 'Sergipe',
                    'uf' => 'SE',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            25 =>
                array (
                    'id' => '26',
                    'name' => 'Sao Paulo',
                    'uf' => 'SP',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            26 =>
                array (
                    'id' => '27',
                    'name' => 'Tocantins',
                    'uf' => 'TO',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
            27 =>
                array (
                    'id' => '28',
                    'name' => 'Outros',
                    'uf' => 'NA',
                    'created_at' => date('Y-m-d H:i'),
                    'updated_at' => date('Y-m-d H:i')
                ),
        ));
    }
}
