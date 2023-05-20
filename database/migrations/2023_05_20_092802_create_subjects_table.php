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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('subjectId')->unique()->nullable();
            $table->string('chemistry');
            $table->string('mathematics');
            $table->string('English');
            $table->string('physics');
            $table->string('literature');
            $table->string('commerce');
            $table->string('crs');
            $table->string('agriculture');
            $table->string('civic');
            $table->string('yoruba');
            $table->string('studentID');
            $table->string('teacherID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
