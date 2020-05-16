<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuratKeluarRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      "tahun" => "required|min:4|numeric",
      "bulan" => "required",
      "penerima" => "required|max:40",
      "perihal" => "required|max:30",
      "nomor_surat" => "required|max:60",
      "tanggal_surat" => "required",
      "nama_kegiatan" => "required|max:100",
      "tanggal_pelaksanaan" => "required",
      "isi_surat" => "required",
      "keterangan" => "required"
    ];
  }
}
