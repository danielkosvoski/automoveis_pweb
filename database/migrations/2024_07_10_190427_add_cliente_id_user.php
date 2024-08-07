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
        Schema::disableForeignKeyConstraints();
        
        Schema::table('users', function (Blueprint $table) {
              $table->foreignId('cliente_id')->nullable()->after('password')
            ->constrained('clientes');

        });

        Schema::enableForeignKeyConstraints();

        Schema::disableForeignKeyConstraints();

        Schema::table('clientes', function (Blueprint $table) {
              $table->foreignId('user_id')->nullable()->after('contato')
            ->constrained('users');

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
