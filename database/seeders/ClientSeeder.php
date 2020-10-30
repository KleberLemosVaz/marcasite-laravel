<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->insert([
            'user_id'               => 1,         
            'razao_social'          => 'Empresa A',
            'nome_fantasia'         => 'Nome Fantasia A',
            'cnpj'                  => '01.234.567/0008-01',
            'endereco'              => 'Rua A nº01',
            'email'                 => 'empresa_a@gmail.com',
            'telefone'              => '1333334444',
            'nome_do_responsavel'   => 'Fulaninho',
            'cpf'                   => '123.456.789-10',
            'celular'               => '13987654321',
            'created_at'            => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        \DB::table('clients')->insert([

            'user_id'               => 1,           
            'razao_social'          => 'Empresa B',
            'nome_fantasia'         => 'Nome Fantasia B',
            'cnpj'                  => '01.234.567/0008-02',
            'endereco'              => 'Rua B nº01',
            'email'                 => 'empresa_b@gmail.com',
            'telefone'              => '1333334444',
            'nome_do_responsavel'   => 'Ciclaninho',
            'cpf'                   => '123.456.789-11',
            'celular'               => '13987654321',
            'created_at'           => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        \DB::table('clients')->insert([
            'user_id'               => 1,           
            'razao_social'          => 'Empresa C',
            'nome_fantasia'         => 'Nome Fantasia C',
            'cnpj'                  => '01.234.567/0008-03',
            'endereco'              => 'Rua C nº01',
            'email'                 => 'empresa_c@gmail.com',
            'telefone'              => '1333334444',
            'nome_do_responsavel'   => 'Godofredo',
            'cpf'                   => '123.456.789-12',
            'celular'               => '13987654321',
            'created_at'            => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        \DB::table('clients')->insert([
            'user_id'               => 1,           
            'razao_social'          => 'Empresa D',
            'nome_fantasia'         => 'Nome Fantasia D',
            'cnpj'                  => '01.234.567/0008-04',
            'endereco'              => 'Rua D nº01',
            'email'                 => 'empresa_d@gmail.com',
            'telefone'              => '1333334444',
            'nome_do_responsavel'   => 'Dolores',
            'cpf'                   => '123.456.789-13',
            'celular'               => '13987654321',
            'created_at'            => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
