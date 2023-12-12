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
        Schema::create('table_trayek', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('lat_from');
            $table->string('long_from');
            $table->string('to');
            $table->string('lat_to');
            $table->string('long_to');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_trayek');
    }
};
