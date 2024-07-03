<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string("Azienda");
            $table->string("Stazione di partenza");
            $table->string("Stazione di arrivo");
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->integer('Numero Carrozze');
            $table->string('In orario');
            $table->string('Cancellato');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
