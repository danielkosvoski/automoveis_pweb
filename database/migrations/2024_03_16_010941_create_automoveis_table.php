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
        Schema::create('automoveis', function (Blueprint $table) {
            $table->id();
            $table->string('modelo',100);

            $table->foreignId('marca_id')->nullable()
            ->constrained('marcas')->after('id');

            $table->integer("ano");
            $table->integer("km");
            $table->string("cor",100);
            $table->string("combustivel", 100);
            $table->string("cambio",100);
            $table->float("valor");
            $table->string("cidade",100);

            $table->foreignId('loja_id')->nullable()
            ->constrained('lojas')->after('id');

            $table->string('imagem',150)->nullable();

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automoveis');
    }
};
