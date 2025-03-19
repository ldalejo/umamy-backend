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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->timestamps();
        });

        // Agregamos una columna rol a la tabla usuarios
        Schema::table('users', function (Blueprint $table) {
            // rol_id por defecto 2 para que se creen por defecto con el rol de cliente
            $table->foreignId('rol_id')->default(2)->constrained('roles')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['rol_id']);
            $table->dropColumn('rol_id');
        });

        Schema::dropIfExists('roles');
    }
};
