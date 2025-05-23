<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->site = 'fornecedor1.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'fornecedor1@sp.com.br';
        $fornecedor->save();

        //metodo create
        Fornecedor::created([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor2.com.br',
            'uf' => 'SP',
            'email' => 'fornecedor2@sp.com.br'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 3',
            'site' => 'fornecedor3.com.br',
            'uf' => 'SP',
            'email' => 'fornecedor3@sp.com.br'
        ]);
    }
}
