<?php

use Illuminate\Support\Facades\Route;

// Rota principal
Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

// Rota "Sobre nós"
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');

// Rota de contato
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

//Rota de fornecedor
Route::get('/fornecedor', [App\Http\Controllers\FornecedorController::class, 'index'])->name('site.fornecedor');

// Rota de login
Route::get('/login', function() { return 'Login'; })->name('site.login');

// Rotas com prefixo 'app'
Route::prefix('app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
    Route::get('/fornecedores', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
});

// Rota de teste com parâmetros
Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

// Rota de fallback para lidar com rotas não encontradas
Route::fallback(function() {
    return 'A rota não existe, clique <a href="'.route('site.index').'">aqui</a> para voltar para a página principal';
});
