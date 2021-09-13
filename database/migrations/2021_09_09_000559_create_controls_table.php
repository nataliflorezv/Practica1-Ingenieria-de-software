<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->string('Fecha',30);
            $table->string('Prueba',30);
            $table->string('Minimo1',20);
            $table->string('Maximo1',20);
            $table->string('Resultado1',20);
            $table->string('Minimo2',20);
            $table->string('Maximo2',20);
            $table->string('Resultado2',20);
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
        Schema::dropIfExists('controls');
    }
}
