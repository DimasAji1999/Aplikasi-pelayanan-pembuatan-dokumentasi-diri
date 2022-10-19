<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pengajuan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('usia');
            $table->string('file')->nullable();
            $table->string('catatan');
            $table->string('ttl');
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_pengajuan', function (Blueprint $table) {
            //
        });
    }
}
