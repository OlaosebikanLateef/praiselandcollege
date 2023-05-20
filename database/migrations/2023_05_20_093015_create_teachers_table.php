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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('teacherId')->unique()->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('title');
            $table->string('password');
            $table->string('confirmPassword');
            $table->string('image');
            $table->string('subjectId');
            $table->string('hostelID');
            $table->string('studentID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
