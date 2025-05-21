<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            // outras colunas...

            // Adicione esta linha apenas se a tabela produtos já existir
            if (Schema::hasTable('produtos')) {
                $table->foreign('produto_id')
                    ->references('id')
                    ->on('produtos')
                    ->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropForeign(['produto_id']);
        });
        Schema::dropIfExists('produto_detalhes');
    }
};
