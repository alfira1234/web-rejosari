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
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_id')->constrained();
            $table->foreignId('jns_paket_id')->constrained();
            $table->string('nam_leng');
            $table->date('tgl_datang');
            $table->integer('jml_org');
            $table->string('email');
            $table->string('no_tlp');
            $table->string('asne');
            $table->string('askot');
            $table->enum('status', ['sudah dibayar','belum dibayar']);
            $table->text('ket_tam')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesans');
    }
};
