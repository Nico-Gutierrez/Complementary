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
        Schema::create('courses', function(Blueprint $table){
            $table->id('id_course');
            $table->string('name_course');
            $table->text('description_course');
            $table->string('acronym');
            $table->boolean('state_course');
            $table->unsignedBigInteger('categorie_id'); // Clave foránea

            $table->foreign('categorie_id')
                  ->references('id_categorie')
                  ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
