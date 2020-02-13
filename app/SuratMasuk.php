<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = "surat_masuk";

    protected $fillable = [
        'tahun',
        'bulan',
        'asal_surat',
        'perihal',
        'nomor_surat',
        'tanggal_surat',
        'isi_surat',
        'keterangan'
    ];
}
