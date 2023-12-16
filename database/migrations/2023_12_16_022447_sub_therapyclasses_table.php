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
        Schema::create('subTherapyClasses', function (Blueprint $table) {
            $table->id('subTherapyClassId', 255);
            $table->string('subTherapyClassName', 50);
            $table->unsignedBigInteger('therapyClassId');
            $table->timestamps();
            $table->foreign('therapyClassId')->references('therapyClassId')->on('therapyClasses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subTherapyClasses');
    }
};
