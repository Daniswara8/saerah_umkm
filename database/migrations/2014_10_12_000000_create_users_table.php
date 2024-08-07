<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('level');
            $table->string('kontak');
            $table->text('alamat');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('konfirmasi_pass');
            $table->enum('status_publish', ['publish', 'draft'])->default('draft');
            $table->enum('status_aktif', ['aktif', 'hapus'])->default('aktif');
            $table->string('slug_link');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
    