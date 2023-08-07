<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $people = [];

        $people[] = ['code' => 1, 'name' => 'Jorge da Silva', 'cpf' => '111.111.111-11', 'email' => 'jorge@terra.com.br', 'category' => 1];
        $people[] = ['code' => 2, 'name' => 'Flavia Monteiro', 'cpf' => '111.111.111-11', 'email' => 'flavia@globo.com', 'category' => 2];
        $people[] = ['code' => 3, 'name' => 'Marcos Frota Ribeiro', 'cpf' => '111.111.111-11', 'email' => 'ribeiro@gmail.com', 'category' => 2];
        $people[] = ['code' => 4, 'name' => 'Raphael Souza Santos', 'cpf' => '111.111.111-11', 'email' => 'rsantos@gmail.com', 'category' => 1];
        $people[] = ['code' => 5, 'name' => 'Pedro Paulo Mota', 'cpf' => '111.111.111-11', 'email' => 'ppmota@gmail.com', 'category' => 1];
        $people[] = ['code' => 6, 'name' => 'Winder Carvalho da Silva', 'cpf' => '111.111.111-11', 'email' => 'winder@hotmail.com', 'category' => 3];
        $people[] = ['code' => 7, 'name' => 'Maria da Penha Albuquerque', 'cpf' => '111.111.111-11', 'email' => 'mpa@hotmail.com', 'category' => 3];
        $people[] = ['code' => 8, 'name' => 'Rafael Garcia Souza', 'cpf' => '111.111.111-11', 'email' => 'rgsouza@hotmail.com', 'category' => 3];
        $people[] = ['code' => 9, 'name' => 'Tabata Costa', 'cpf' => '111.111.111-11', 'email' => 'tabata_costa@gmail.com', 'category' => 2];
        $people[] = ['code' => 10, 'name' => 'Ronil Camarote', 'cpf' => '111.111.111-11', 'email' => 'camarote@terra.com.br', 'category' => 1];
        $people[] = ['code' => 11, 'name' => 'Joaquim Barbosa', 'cpf' => '111.111.111-11', 'email' => 'barbosa@globo.com', 'category' => 1];
        $people[] = ['code' => 12, 'name' => 'Eveline Maria Alcantra', 'cpf' => '111.111.111-11', 'email' => 'ev_alcantra@gmail.com', 'category' => 2];
        $people[] = ['code' => 13, 'name' => 'João Paulo Vieira', 'cpf' => '111.111.111-11', 'email' => 'jpvieria@gmail.com', 'category' => 1];
        $people[] = ['code' => 14, 'name' => 'Carla Zamborlini', 'cpf' => '111.111.111-11', 'email' => 'zamborlini@terra.com.br', 'category' => 3];

        DB::table('people')->insert($people);
    }
}
