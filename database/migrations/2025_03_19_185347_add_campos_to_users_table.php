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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nombre')->nullable()->after('email');
            $table->string('apellido')->nullable()->after('nombre');
            $table->string('telefono')->nullable()->after('apellido');
            $table->string('direccion')->nullable()->after('telefono');
            $table->string('ciudad')->nullable()->after('direccion');
            $table->string('pais')->nullable()->after('ciudad');
            $table->string('codigo_postal')->nullable()->after('pais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nombre', 'apellido', 'telefono', 'direccion', 'ciudad', 'pais', 'codigo_postal']);
        });
    }
};
