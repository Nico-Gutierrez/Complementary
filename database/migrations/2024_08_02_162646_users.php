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
        Schema:: create('users', function(Blueprint $table){
            $table->id('id_user');
            $table->string('password');
            $table->string('state_user');

            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id_person')
            ->on('peoples');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
