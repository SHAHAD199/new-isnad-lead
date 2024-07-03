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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("name", 80);
            $table->string("phone", 80);
            $table->boolean('easy_downPayment');
            $table->boolean('high_downPayment');
            $table->boolean('horizontal_complex');
            $table->boolean('vertical_complex');
            $table->boolean('area_100_200');
            $table->boolean('area_200_400');
            $table->boolean('middle_location');
            $table->boolean('suburbs_location');
            $table->boolean('out_bg_middle_cities');
            $table->boolean('out_bg_south_cities');
            $table->boolean('out_bg_kurdistan');
            $table->boolean('purpose_purchase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
