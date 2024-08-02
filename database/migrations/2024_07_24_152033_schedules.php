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
        Schema::create('schedules', function(Blueprint $table){
            $table->id('id_schedules');
            $table->date('start_date');
            $table->date('end_date');

            $table->unsignedBigInteger('coordination_id');
            $table->unsignedBigInteger('request_id');  // Clave foránea

            $table->foreign('coordination_id')
                  ->references('id_coordination')
                  ->on('coordinations');

            $table->foreign('request_id')
                  ->references('id_request')
                  ->on('requests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
