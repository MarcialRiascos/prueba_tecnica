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
        Schema::create('empleado_rols', function (Blueprint $table) {
            $table->integer('empleado_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('rol_id')->references('id')->on('roles')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_rols');
    }
};
