<?php

use App\Enums\StutasRoom;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(StutasRoom::Active->value);
            $table->timestamps();
        });

        Schema::table('rooms' , function (Blueprint $table) {
            $table->foreignId('id_patient')->nullable()->references('id')->on('patients')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
