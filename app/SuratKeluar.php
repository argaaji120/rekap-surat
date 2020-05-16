<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $table = "surat_keluar";

    protected $fillable = [
        'tahun', 'bulan', 'penerima', 'perihal', 'nomor_surat', 'tanggal_surat',
        'nama_kegiatan', 'tanggal_pelaksanaan', 'isi_surat', 'keterangan', 'periode'
    ];
}
