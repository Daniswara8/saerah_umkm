<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('total_harga', 12, 2);
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending');
            $table->string('metode_pembayaran');
            $table->string('bukti_pembayaran')->nullable();
            $table->text('alamat_pengiriman')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}
