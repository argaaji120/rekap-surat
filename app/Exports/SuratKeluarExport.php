<?php

namespace App\Exports;

use App\SuratKeluar;
use App\Periode;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SuratKeluarExport implements FromView
{
    public function view(): View
    {
        $periode    = Periode::first();
        $data_surat = SuratKeluar::where('periode', $periode->periode)->orderBy('bulan', 'ASC')->get();

        return view('pages.surat_keluar.export', [
            'surat_keluar' => $data_surat,
            'periode' => $periode
        ]);
    }
}
