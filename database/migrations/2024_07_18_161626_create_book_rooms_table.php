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
        Schema::create('book_rooms', function (Blueprint $table) {
            $table->id();
            $table->date('Booking_start_date');
            $table->date('cancellation_date')->nullable();
            $table->foreignId('id_patient')->nullable()->references('id')->on('patients')->cascadeOnDelete();
            $table->foreignId('id_room')->references('id')->on('rooms')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_rooms');
    }
};
