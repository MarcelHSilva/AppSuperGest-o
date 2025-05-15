<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '1110000',
                'ddd' => '18',
                'telefone' => '999999999',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '212121212',
                'ddd' => '19',
                'telefone' => '99999888',
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '2123333',
                'ddd' => '17',
                'telefone' => '77779888',
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'S',
                'cnpj' => '212333344',
                'ddd' => '15',
                'telefone' => '7777988899',
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
