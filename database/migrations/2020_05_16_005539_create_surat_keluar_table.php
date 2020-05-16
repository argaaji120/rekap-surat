<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tahun');
            $table->string('bulan');
            $table->string('penerima');
            $table->string('perihal');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('nama_kegiatan');
            $table->date('tanggal_pelaksanaan');
            $table->text('isi_surat');
            $table->text('keterangan');
            $table->string('periode');

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
        Schema::dropIfExists('surat_keluar');
    }
}
