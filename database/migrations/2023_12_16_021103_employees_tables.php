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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employeeId', 255);
            $table->string('employeeName', 50);
            $table->string('employeeEmail', 50);
            $table->string('employeePhone', 50);
            $table->text('employeeAddress');
            $table->boolean('isAdmin');
            $table->string('employeePassword', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
