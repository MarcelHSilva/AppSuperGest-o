<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contato = new SiteContato();
        $contato->nome = 'SistemaSG';
        $contato->telefone = '99 9999-9999';
        $contato->email = 'fulano@sp.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Ola, gostaria de saber mais sobre o produto';
        $contato->save();
    }
}
