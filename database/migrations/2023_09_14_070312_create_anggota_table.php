<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() : void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('kode',9);
            $table->string('nama',100);
            $table->char('jk',100);
            $table->string('jurusan',100);
            $table->string('no',100);
            $table->string('alamat',100);
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
        Schema::dropIfExists('anggota');
    }
};