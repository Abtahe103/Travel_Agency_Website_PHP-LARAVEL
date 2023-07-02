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
        Schema::create('all_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('package_type')->nullable();
            $table->string('rating')->nullable();
            $table->string('tour_length')->nullable();
            $table->text('tour_description')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_packages');
    }
};
