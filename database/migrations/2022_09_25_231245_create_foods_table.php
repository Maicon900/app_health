<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->string('nome');
            $table->double('porcao', 8, 2)->nullable();
            $table->double('valor_energetico', 8, 2)->nullable();
            $table->double('carboidratos', 8, 2)->nullable();
            $table->double('proteinas', 8, 2)->nullable();
            $table->double('gorduras_totais', 8, 2)->nullable();
            $table->double('gorduras_trans', 8, 2)->nullable();
            $table->double('fibras_alimentares', 8, 2)->nullable();
            $table->double('sodio', 8, 2)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
};
