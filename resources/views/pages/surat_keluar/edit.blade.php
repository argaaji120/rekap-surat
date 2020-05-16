@extends('layouts.app')

@section('title', '| Edit Surat Keluar')

@section('content')
<section class="content-header">
  <h1>Surat Keluar</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li>Surat keluar</li>
    <li class="active">Edit Surat</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Surat Keluar</h3><br>
          <small><b>" {{ $surat->nomor_surat }} "</b></small>
        </div>

        <form role="form" autocomplete="off" method="POST" action="{{ route('surat-keluar.update', [$surat->id]) }}">
          @csrf
          <input type="hidden" value="PUT" name="_method">
          <div class="box-body">
            <div class="row">
              <!-- Tahun | name:tahun -->
              <div class="col-md-6">
                <div class="form-group @error('tahun') has-error @enderror">
                  <label for="tahun">
                    @error('tahun') <i class="fa fa-times-circle-o"></i> @enderror Tahun
                  </label>
                  <input type="text" name="tahun" class="form-control" id="tahun"
                    value="{{ old('tahun') ? old('tahun') : $surat->tahun }}" placeholder="Tahun">
                  @error('tahun')
                  <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <!-- Bulan | name:bulan -->
              <div class="col-md-6">
                <div class="form-group @error('bulan') has-error @enderror">
                  <label for="bulan">
                    @error('bulan') <i class="fa fa-times-circle-o"></i> @enderror Bulan
                  </label>
                  <br>
                  <select class="form-control select2" name="bulan" id="bulan" style="width:100%">
                    <option selected disabled>Pilih Bulan</option>
                    <option {{ $surat->bulan == 'Januari' ? 'selected' : '' }} value="Januari"> Januari </option>
                    <option {{ $surat->bulan == 'Februari' ? 'selected' : '' }} value="Februari"> Februari </option>
                    <option {{ $surat->bulan == 'Maret' ? 'selected' : '' }} value="Maret"> Maret </option>
                    <option {{ $surat->bulan == 'April' ? 'selected' : '' }} value="April"> April </option>
                    <option {{ $surat->bulan == 'Mei' ? 'selected' : '' }} value="Mei"> Mei </option>
                    <option {{ $surat->bulan == 'Juni' ? 'selected' : '' }} value="Juni"> Juni </option>
                    <option {{ $surat->bulan == 'Juli' ? 'selected' : '' }} value="Juli"> Juli </option>
                    <option {{ $surat->bulan == 'Agustus' ? 'selected' : '' }} value="Agustus"> Agustus </option>
                    <option {{ $surat->bulan == 'September' ? 'selected' : '' }} value="September"> September </option>
                    <option {{ $surat->bulan == 'Oktober' ? 'selected' : '' }} value="Oktober"> Oktober </option>
                    <option {{ $surat->bulan == 'November' ? 'selected' : '' }} value="November"> November </option>
                    <option {{ $surat->bulan == 'Desember' ? 'selected' : '' }} value="Desember"> Desember </option>
                  </select>
                  @error('bulan')
                  <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Penerima | name:penerima -->
              <div class="col-md-6">
                <div class="form-group @error('penerima') has-error @enderror">
                  <label for="penerima">
                    @error('penerima') <i class="fa fa-times-circle-o"></i> @enderror Penerima
                  </label>
                  <input type="text" name="penerima" class="form-control" id="penerima"
                    value="{{ old('penerima') ? old('penerima') : $surat->penerima }}" placeholder="Penerima">
                  @error('penerima')
                  <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <!-- Perihal | name:perihal -->
              <div class="col-md-6">
                <div class="form-group @error('perihal') has-error @enderror">
                  <label for="perihal">
                    @error('perihal') <i class="fa fa-times-circle-o"></i> @enderror Perihal
                  </label>
                  <input type="text" name="perihal" class="form-control" id="perihal"
                    value="{{ old('perihal') ? old('perihal') : $surat->perihal }}" placeholder="Perihal">
                  @error('perihal')
                  <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Nomor Surat | name:nomor_surat -->
              <div class="col-md-6">
                <div class="form-group @error('nomor_surat') has-error @enderror">
                  <label for="nomor_surat">
                    @error('nomor_surat') <i class="fa fa-times-circle-o"></i> @enderror Nomor Surat
                  </label>
                  <input type="text" name="nomor_surat" class="form-control" id="nomor_surat"
                    value="{{ old('nomor_surat') ? old('nomor_surat') : $surat->nomor_surat }}"
                    placeholder="Nomor Surat">
                  @error('nomor_surat')
                  <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <!-- Tanggal Surat | name:tanggal_surat -->
              <div class="col-md-6">
                <div class="form-group @error('tanggal_surat') has-error @enderror">
                  <label for="datepicker">
                    @error('tanggal_surat') <i class="fa fa-times-circle-o"></i> @enderror Tanggal Surat
                  </label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tanggal_surat" class="form-control pull-right" id="datepicker"
                      value="{{ old('tanggal_surat') ? old('tanggal_surat') : date('d-m-Y', strtotime($surat->tanggal_surat)) }}"
                      placeholder="Tanggal Surat">
                  </div>
                  @error('tanggal_surat')
                  <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Nama Kegiatan | name:nama_kegiatan -->
              <div class="col-md-6">
                <div class="form-group @error('nama_kegiatan') has-error @enderror">
                  <label for="nama_kegiatan">
                    @error('nama_kegiatan') <i class="fa fa-times-circle-o"></i> @enderror Nama Kegiatan
                  </label>
                  <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan"
                    value="{{ old('nama_kegiatan') ? old('nama_kegiatan') : $surat->nama_kegiatan }}"
                    placeholder="Nama Kegiatan">
                  @error('nama_kegiatan')
                  <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <!-- Tanggal Pelaksanaan | name:tanggal_pelaksanaan -->
              <div class="col-md-6">
                <div class="form-group @error('tanggal_pelaksanaan') has-error @enderror">
                  <label for="datepicker2">
                    @error('tanggal_pelaksanaan') <i class="fa fa-times-circle-o"></i> @enderror Tanggal Pelaksanaan
                  </label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tanggal_pelaksanaan" class="form-control pull-right" id="datepicker2"
                      value="{{ old('tanggal_pelaksanaan') ? old('tanggal_pelaksanaan') : date('d-m-Y', strtotime($surat->tanggal_pelaksanaan)) }}"
                      placeholder="Tanggal Pelaksanaan">
                  </div>
                  @error('tanggal_pelaksanaan')
                  <span class="help-block">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <!-- Isi Surat | name:isi_surat -->
            <div class="form-group @error('isi_surat') has-error @enderror">
              <label for="isi_surat">
                @error('isi_surat') <i class="fa fa-times-circle-o"></i> @enderror Isi Surat
              </label>
              <textarea name="isi_surat" id="isi_surat" class="form-control" rows="3" style="resize:none"
                maxlength="500"
                placeholder="Isi Surat">{{ old('isi_surat') ? old('isi_surat') : $surat->isi_surat }}</textarea>
              @error('isi_surat')
              <span class="help-block">{{ $message }}</span>
              @enderror
            </div>

            <!-- Keterangan | name:keterangan -->
            <div class="form-group @error('keterangan') has-error @enderror">
              <label for="keterangan">
                @error('keterangan') <i class="fa fa-times-circle-o"></i> @enderror Keterangan
              </label>
              <textarea name="keterangan" id="keterangan" class="form-control" rows="3" style="resize:none"
                maxlength="500"
                placeholder="Keterangan">{{ old('keterangan') ? old('keterangan') : $surat->keterangan }}</textarea>
              @error('keterangan')
              <span class="help-block">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="box-footer">
            <button type="button" class="btn btn-flat btn-default"
              onclick="window.location.href='{{ route('surat-keluar.index') }}' ">
              <i class="fa fa-reply"></i>&nbsp; Kembali
            </button>
            <button type="submit" class="btn btn-flat btn-primary">
              <i class="fa fa-save"></i>&nbsp; Update
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@push('after-script')
<script>
  $.fn.datepicker.dates['id'] = {
        days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"]
        , daysShort: ["Mgu", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"]
        , daysMin: ["Mg", "Sn", "Sl", "Ra", "Ka", "Ju", "Sa"]
        , months: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]
        , monthsShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"]
        , today: "Hari Ini"
        , clear: "Kosongkan"
    }
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
        , language: 'id'
        , format: 'dd-mm-yyyy'
    })
    $('#datepicker2').datepicker({
        autoclose: true
        , language: 'id'
        , format: 'dd-mm-yyyy'
    })

    //Initialize Select2 Elements
    $('.select2').select2()

</script>
@endpush