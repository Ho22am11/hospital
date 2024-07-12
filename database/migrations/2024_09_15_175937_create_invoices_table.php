<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->decimal('price');
            $table->timestamps();
        });

        Schema::table('invoices' , function (Blueprint $table){
            $table->foreignId('id_patient')->references('id')->on('patients')->cascadeOnDelete();
            $table->foreignId('id_examinations')->nullable()->references('id')->on('medical_examinations')->cascadeOnDelete();
            $table->foreignId('id_imagings')->nullable()->references('id')->on('medical_imagings')->cascadeOnDelete();
            $table->foreignId('id_tests')->nullable()->references('id')->on('medical_tests')->cascadeOnDelete();
            $table->foreignId('id_orders')->nullable()->references('id')->on('orders')->cascadeOnDelete();
            $table->foreignId('id_surgery')->nullable()->references('id')->on('surgeries')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
