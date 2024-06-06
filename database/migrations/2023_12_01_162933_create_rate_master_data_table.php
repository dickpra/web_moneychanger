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
            $table->string('nama_bank');
            $table->string('nama');
            $table->string('no_rekening');
            $table->string('biaya_transaksi');
            $table->string('active');
            $table->string('nama_bank');
            $table->string('icons');
            $table->string('type');
            $table->float('price');
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
