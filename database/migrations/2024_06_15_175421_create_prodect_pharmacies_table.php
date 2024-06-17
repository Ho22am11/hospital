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
        Schema::create('prodect_pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('salahea');
            $table->integer('quantaty');
            $table->decimal('price');
            $table->decimal('orginal_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodect_pharmacies');
    }
};
