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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->string('password');
            $table->string('email/phone');
            $table->enum('gender', ['laki-laki', 'perempuan'])->default('laki-laki');
            $table->string('kelas');
            $table->unsignedBigInteger('nisn')->unique();
            $table->foreignId('jurusan_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
