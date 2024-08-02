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
        Schema::create('inscriptions', function(Blueprint $table){
            $table->id('id_register');
            $table->string('state_register');
            $table->date('date_register');
            
            $table->unsignedBigInteger('id_student');
            $table->unsignedBigInteger('id_course');
            $table->unsignedBigInteger('id_schedules');
            $table->unsignedBigInteger('person_id');
            

            $table->foreign('id_student')
              ->references('id_student')
              ->on('students');

            $table->foreign('id_course')
              ->references('id_course')
              ->on('courses');

            $table->foreign('id_schedules')
              ->references('id_schedules')
              ->on('schedules');


            $table->foreign('person_id')
              ->references('id_person')
              ->on('peoples');



    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
