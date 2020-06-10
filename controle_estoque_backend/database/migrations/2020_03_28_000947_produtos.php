<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            // $table->integer('categoria_id')->unsigned();
            // $table->foreign('categoria_id')->references('id')->on('categorias');
            // $table->integer('fornecedor_id')->unsigned();
            // $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->integer('estoque');
            $table->string('descrição');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
