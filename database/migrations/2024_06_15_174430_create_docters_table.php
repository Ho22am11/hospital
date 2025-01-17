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
        Schema::create('docters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('age');
            $table->boolean('male');
            $table->string('phone_number');
            $table->date('date_appointment');
            $table->decimal('salary');
            $table->string('email');
            $table->foreignId('id_section')->references('id')->on('sections')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docters');
    }
};
