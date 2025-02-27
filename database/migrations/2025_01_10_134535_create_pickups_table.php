<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Nama
            $table->string('phone_number'); // Nomor Telepon
            $table->text('address'); // Alamat
            $table->date('pickup_date'); // Tanggal Penjemputan
            $table->time('pickup_time'); // Waktu Penjemputan
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending'); // Status
            $table->timestamps(); // Created_at & Updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pickups');
    }
};
