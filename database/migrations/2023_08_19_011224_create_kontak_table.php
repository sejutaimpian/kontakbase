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
        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kontak_room_id')->constrained(
                table: 'kontak_room',
                column: 'id',
                indexName: 'kontak_kontak_room_id'
            );
            $table->string('nama_depan', 20);
            $table->string('nama_belakang', 20);
            $table->string('nomor_telepon', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontak');
    }
};
