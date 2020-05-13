<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = "surat_masuk";

    protected $fillable = [
        'tahun', 'bulan', 'asal_surat', 'perihal', 'nomor_surat', 'tanggal_surat',
        'nama_kegiatan', 'tanggal_pelaksanaan', 'isi_surat', 'keterangan', 'periode'
    ];
}
