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
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->text('report');
            $table->timestamps();
        });

        Schema::table('diagnoses' , function (Blueprint $table) {
            $table->foreignId('id_examinations')->references('id')->on('medical_examinations')->cascadeOnDelete();
            $table->foreignId('id_doctor')->references('id')->on('docters')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnoses');
    }
};
