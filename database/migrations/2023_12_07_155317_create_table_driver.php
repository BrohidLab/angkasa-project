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
        Schema::create('table_driver', function (Blueprint $table) {
            $table->id();
            $table->string('no_angkot');
            $table->string('nama_lengkap');
            $table->string('username');
            $table->string('password');
            $table->string('no_polisi');
            $table->string('pekerjaan');
            $table->string('trayek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_driver');
    }
};
