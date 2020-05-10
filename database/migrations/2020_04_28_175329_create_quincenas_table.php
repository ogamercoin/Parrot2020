<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuincenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quincenas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cedula');
            $table->foreignId('asig_dedu');
            $table->date('fecha');
            $table->date('desde');
            $table->date('hasta');
            $table->integer('id_comprobante')->unique();

            $table->timestamps();
            //  Relaciones entre tablsa

            $table->foreign('cedula')->references('cedula')->on('empleados')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('asig_dedu')->references('id')->on('asig_dedu')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quincenas');
    }
}