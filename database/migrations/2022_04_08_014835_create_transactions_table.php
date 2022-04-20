<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('id_kamar');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('jumlah_kamar');
            $table->enum('status', ['menunggu pembayaran','menunggu diverifikasi','diverifikasi','ditolak','cancel','checked_in','checked_out'])->default('menunggu pembayaran');
            $table->string('bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
