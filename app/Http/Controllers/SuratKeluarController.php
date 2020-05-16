<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratKeluarRequest;
use App\Periode;
use App\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
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

    $surat_keluar = SuratKeluar::where('periode', $periode->periode)->orderBy('bulan', 'DESC')->get();

    return view('pages.surat_keluar.index')->with([
      "surat_keluar" => $surat_keluar,
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
    return view('pages.surat_keluar.add');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(SuratKeluarRequest $request)
  {
    $periode = Periode::first();

    $data = $request->all();

    $data['tanggal_surat'] = date('Y-m-d', strtotime($request->tanggal_surat));
    $data['tanggal_pelaksanaan'] = date('Y-m-d', strtotime($request->tanggal_pelaksanaan));
    $data['periode'] = $periode->periode;

    SuratKeluar::create($data);

    return redirect()
      ->route('surat-keluar.index')
      ->with('status', 'Surat kelaur berhasil ditambahkan');
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
    $surat_keluar = SuratKeluar::findOrFail($id);

    return view('pages.surat_keluar.edit')->with([
      "surat" => $surat_keluar
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(SuratKeluarRequest $request, $id)
  {
    $surat_keluar = SuratKeluar::findOrFail($id);

    $data = $request->all();

    $data['tanggal_surat'] = date('Y-m-d', strtotime($request->tanggal_surat));
    $data['tanggal_pelaksanaan'] = date('Y-m-d', strtotime($request->tanggal_pelaksanaan));

    $surat_keluar->update($data);

    return redirect()
      ->route('surat-keluar.index')
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
    $surat_keluar = SuratKeluar::findOrFail($id);
    $surat_keluar->delete();

    return redirect()
      ->route('surat-keluar.index')
      ->with('status', 'Surat berhasil dihapus');
  }
}
