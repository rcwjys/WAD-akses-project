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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id('medicineId', 255);
            $table->string('medicineName', 50);
            $table->integer('medicineStock');
            $table->text('medicineInformation');
            $table->date('expiredDate');
            $table->string('medicinePeriod', 50);
            $table->unsignedBigInteger('recipeId');
            $table->unsignedBigInteger('medicineUnitId');
            $table->unsignedBigInteger('therapyClassId');
            $table->unsignedBigInteger('subTherapyClassId');
            $table->foreign('recipeId')->references('recipeId')->on('medicineRecipes');
            $table->foreign('medicineUnitId')->references('medicineUnitId')->on('medicineUnits');
            $table->foreign('therapyClassId')->references('therapyClassId')->on('therapyClasses');
            $table->foreign('subTherapyClassId')->references('subTherapyClassId')->on('subTherapyClasses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('medicines');
    }
};
