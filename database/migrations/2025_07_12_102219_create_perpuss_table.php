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
        Schema::create('perpuss', function (Blueprint $table) {
        $table->increments('no');
        $table->string('nama')->unique();
        $table->string('alamat');
        $table->string('no_telepon');
        $table->string('tipe');
        $table->double('latitude');
        $table->double('longitude');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpuss');
    }
};
