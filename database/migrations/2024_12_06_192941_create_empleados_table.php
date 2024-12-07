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
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->char('sexo');
            $table->integer('area_id')->unsigned();
            $table->integer('boletin')->nullable();
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
