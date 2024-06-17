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
        Schema::create('medical_examinations', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->decimal('price');
            $table->timestamps();
        });

        Schema::table('medical_examinations' , function (Blueprint $table){
            $table->foreignId('id_section')->references('id')->on('sections')->cascadeOnDelete();
            $table->foreignId('id_patient')->references('id')->on('patients')->cascadeOnDelete();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_examinations');
    }
};
