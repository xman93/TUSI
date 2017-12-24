<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHechosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        //Asi se referencia en la tabla una relacion con otra tabla
        //Aquí la tabla roles esta referenciada con la id user_id al id de la tabla users
        /*public function up(){
        Schema::table('roles', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            });
        }*/

        Schema::create('hechos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 255)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('user_id')->nullable();
            $table->integer('curso_academico')->nullable();
            $table->date('fecha_hecho')->nullable();
            $table->integer('nivel_autorizacion')->nullable();
            $table->integer('etiquetas_id');
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
        Schema::dropIfExists('hechos');
    }
}
