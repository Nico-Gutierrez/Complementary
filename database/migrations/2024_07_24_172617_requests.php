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
        Schema::create('requests', function(Blueprint $table){
            $table->id('id_request');
            $table->string('details');
            $table->integer('quota');
            $table->integer('code');
            $table->boolean('state_request');

            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('teacher_id');

            $table->foreign('course_id')
                  ->references('id_course')
                  ->on('courses');

            $table->foreign('teacher_id')
                  ->references('id_teacher')
                  ->on('teachers');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
