<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratMasukRequest;
use App\Periode;
use Illuminate\Http\Request;
use App\SuratMasuk;

class SuratMasukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode = Periode::first();

        $surat_masuk = SuratMasuk::where('periode', $periode->periode)->orderBy('bulan', 'DESC')->get();

        return view('pages.surat_masuk.index')->with([
            "surat_masuk" => $surat_masuk,
            "periode" => $periode
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.surat_masuk.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratMasukRequest $request)
    {
        $periode = Periode::first();

        $data = $request->all();

        $data['tanggal_surat'] = date('Y-m-d', strtotime($request->tanggal_surat));
        $data['tanggal_pelaksanaan'] = date('Y-m-d', strtotime($request->tanggal_pelaksanaan));
        $data['periode'] = $periode->periode;

        SuratMasuk::create($data);

        return redirect()
            ->route('surat-masuk.index')
            ->with('status', 'Surat masuk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat = SuratMasuk::findOrFail($id);

        return view('pages.surat_masuk.detail')->with([
            "surat" => $surat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_masuk = SuratMasuk::findOrFail($id);

        return view('pages.surat_masuk.edit')->with([
            "surat_masuk" => $surat_masuk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuratMasukRequest $request, $id)
    {
        $surat_masuk = SuratMasuk::findOrFail($id);

        $data = $request->all();

        $data['tanggal_surat'] = date('Y-m-d', strtotime($request->tanggal_surat));
        $data['tanggal_pelaksanaan'] = date('Y-m-d', strtotime($request->tanggal_pelaksanaan));

        $surat_masuk->update($data);

        return redirect()
            ->route('surat-masuk.index')
            ->with('status', 'Surat berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_masuk = SuratMasuk::findOrFail($id);
        $surat_masuk->delete();

        return redirect()
            ->route('surat-masuk.index')
            ->with('status', 'Surat berhasil dihapus');
    }
}
