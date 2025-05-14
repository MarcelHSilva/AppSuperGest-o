<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('fornecedor', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedor');
Route::get('/login', function() { return 'Login'; })->name('site.login');

// Prefix corrigido (sem parênteses extras)
Route::prefix('app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function() {
    echo 'A rota não existe, clique <a href="'.route('site.index').'">aqui</a> para voltar para a página principal';
});