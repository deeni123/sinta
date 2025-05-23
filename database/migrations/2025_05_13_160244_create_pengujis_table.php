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
        Schema::create('pengujis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa')->nullable()->constrained('mahasiswa')->onDelete('cascade');
            $table->foreignId('id_dosen')->nullable()->constrained('dosen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengujis');
    }
};
