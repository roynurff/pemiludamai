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
        Schema::create('dprdprov', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto')->nullable(); // Assuming foto is a path or URL to an image
            $table->string('partai');
            $table->text('visi_misi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dprdprov');
    }
};
