<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Conciertos extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('conciertos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique();
            $table->foreignId('promotor_id')->constrained('promotores')->onDelete('cascade');
            $table->foreignId('recinto_id')->constrained('recintos')->onDelete('cascade');
            $table->integer('num_spectators');
            $table->integer('profitability')->nullable();
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('conciertos');
    }
}
