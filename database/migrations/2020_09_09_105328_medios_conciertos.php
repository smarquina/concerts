<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MediosConciertos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medios_conciertos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('concierto_id')->nullable()->constrained('conciertos')->onDelete('cascade');
            $table->foreignId('medio_id')->nullable()->constrained('medios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medios_conciertos');
    }
}
