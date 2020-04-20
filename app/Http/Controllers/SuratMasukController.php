<?php

namespace App\Http\Controllers;

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
        $surats = SuratMasuk::orderBy('bulan', 'DESC')->get();

        return view('surat_masuk.index', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_masuk.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_data   = new SuratMasuk;

        $new_data->tahun                = $request->get('tahun');
        $new_data->bulan                = $request->get('bulan');
        $new_data->asal_surat           = $request->get('asal_surat');
        $new_data->perihal              = $request->get('perihal');
        $new_data->nomor_surat          = $request->get('nomor_surat');
        $new_data->tanggal_surat        = date('Y-m-d', strtotime($request->get('tanggal_surat')));
        $new_data->nama_kegiatan        = $request->get('nama_kegiatan');
        $new_data->tanggal_pelaksanaan  = date('Y-m-d', strtotime($request->get('tanggal_pelaksanaan')));
        $new_data->isi_surat            = $request->get('isi_surat');
        $new_data->keterangan           = $request->get('keterangan');

        $new_data->save();

        return redirect()
            ->route('surat_masuk.index')
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
