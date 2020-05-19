<?php

namespace App\Exports;

use App\Periode;
use App\SuratMasuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SuratMasukExport implements FromView
{
    public function view(): View
    {
        $periode    = Periode::first();
        $data_surat = SuratMasuk::where('periode', $periode->periode)->orderBy('bulan', 'ASC')->get();

        return view('pages.surat_masuk.export', [
            'surat_masuk' => $data_surat,
            'periode' => $periode
        ]);
    }
}
