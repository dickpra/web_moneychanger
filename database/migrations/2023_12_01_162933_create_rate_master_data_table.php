<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rate_master_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bank')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('biaya_transaksi')->nullable();
            $table->string('active')->nullable();
            $table->string('icons');
            $table->string('type')->nullable();
            $table->float('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_master_data');
    }
};
