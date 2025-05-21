<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('filiais', function (Blueprint $table) {
           $table->id();
           $table->string('filial', 50);
           $table->timestamps(); 
        });

        //criar tabela produtos_filiais
        Schema::create('produtos_filiais', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('filial_id');
           $table->unsignedBigInteger('produto_id');
           $table->decimal('preco_venda', 8, 2)->default(0.01);
           $table->integer('estoque_minimo')->default(1);
           $table->integer('estoque_maximo')->default(1); 
           $table->timestamps();

           //foreign keys
           $table->foreign('filial_id')->references('id')->on('filiais');
           $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    // Primeiro remove a tabela de relacionamento
    Schema::dropIfExists('produtos_filiais');
    
    // Depois remove a tabela filiais
    Schema::dropIfExists('filiais');
    
    // NÃO tente adicionar as colunas de volta aqui
    // Isso será tratado pela migração original que criou essas colunas
}
};
