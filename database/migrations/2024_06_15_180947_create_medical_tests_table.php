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
        Schema::create('medical_tests', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('img');
            $table->decimal('price');
            $table->timestamps();
        });

        Schema::table('medical_tests' , function (Blueprint $table) {
            $table->foreignId('id_patient')->references('id')->on('patients')->cascadeOnDelete();
            $table->foreignId('id_doctor')->references('id')->on('docters')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_tests');
    }
};
