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
        Schema::create('iteam_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders_id')->references('id')->on('orders')->cascadeOnDelete();
            $table->foreignId('prodect_id')->references('id')->on('prodect_pharmacies')->cascadeOnDelete();
            $table->integer('count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iteam_orders');
    }
};
