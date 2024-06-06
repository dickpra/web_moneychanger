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
        Schema::create('blockchain', function (Blueprint $table) {
            $table->id();
            $table->integer('id_rate')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('type')->nullable();
            $table->string('nama_blockchain')->nullable();
            $table->string('active')->nullable();
            $table->string('rekening_wallet')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blockchain');
    }
};
