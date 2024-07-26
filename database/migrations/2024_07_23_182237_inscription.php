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
        Schema::create('inscription', function(Blueprint $table){
            $table->id('id_register');
            $table->string('state_register');
            $table->date('date_register');

            $table->unsignedBigInteger('id_student');
            $table->unsignedInteger('id_course');

            $table->foreign('id_student')
                    ->references('id_student')->on('students');

            $table->foreign('id_course')
                    ->references('id_course')->on('courses');
            
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription');
    }
};
