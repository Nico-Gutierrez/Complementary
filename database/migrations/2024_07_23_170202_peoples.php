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
         Schema::create('peoples', function(Blueprint $table){
            $table->id('id_person');
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->boolean('permissions');
            $table->integer('document_number')->unique();
            $table->date('date_birth');
            $table->string('address');

            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('document_type_id'); // Clave foránea

            $table->foreign('country_id')
                  ->references('id_country')
                  ->on('countries')
                  ->onDelete('cascade');

            $table->foreign('document_type_id')
                  ->references('id_document_type')
                  ->on('documents_type');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peoples');
    }
};
