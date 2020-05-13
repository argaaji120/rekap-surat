@extends('layouts.app')

@section('title', '| Input Surat Masuk')

@section('link')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
<section class="content-header">
    <h1>Surat Masuk</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Surat Masuk</li>
        <li class="active">Tambah Surat</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Input Surat Masuk</h3>
                </div>

                <form role="form" autocomplete="off" method="POST" action="{{ route('surat-masuk.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <!-- Tahun | name:tahun -->
                            <div class="col-md-6">
                                <div class="form-group @error('tahun') has-error @enderror">
                                    <label for="tahun">
                                        @error('tahun') <i class="fa fa-times-circle-o"></i> @enderror Tahun
                                    </label>
                                    <input type="text" name="tahun" class="form-control" id="tahun" value="{{ old('tahun') }}" placeholder="Tahun">
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
                                        <option {{ old('bulan') == 'Januari' ? 'selected' : '' }} value="Januari"> Januari </option>
                                        <option {{ old('bulan') == 'Februari' ? 'selected' : '' }} value="Februari"> Februari </option>
                                        <option {{ old('bulan') == 'Maret' ? 'selected' : '' }} value="Maret"> Maret </option>
                                        <option {{ old('bulan') == 'April' ? 'selected' : '' }} value="April"> April </option>
                                        <option {{ old('bulan') == 'Mei' ? 'selected' : '' }} value="Mei"> Mei </option>
                                        <option {{ old('bulan') == 'Juni' ? 'selected' : '' }} value="Juni"> Juni </option>
                                        <option {{ old('bulan') == 'Juli' ? 'selected' : '' }} value="Juli"> Juli </option>
                                        <option {{ old('bulan') == 'Agustus' ? 'selected' : '' }} value="Agustus"> Agustus </option>
                                        <option {{ old('bulan') == 'September' ? 'selected' : '' }} value="September"> September </option>
                                        <option {{ old('bulan') == 'Oktober' ? 'selected' : '' }} value="Oktober"> Oktober </option>
                                        <option {{ old('bulan') == 'November' ? 'selected' : '' }} value="November"> November </option>
                                        <option {{ old('bulan') == 'Desember' ? 'selected' : '' }} value="Desember"> Desember </option>
                                    </select>
                                    @error('bulan')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Asal Surat | name:asal_surat -->
                            <div class="col-md-6">
                                <div class="form-group @error('asal_surat') has-error @enderror">
                                    <label for="asal_surat">
                                        @error('asal_surat') <i class="fa fa-times-circle-o"></i> @enderror Asal Surat
                                    </label>
                                    <input type="text" name="asal_surat" class="form-control" id="asal_surat" placeholder="Asal Surat">
                                    @error('asal_surat')
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
                                    <input type="text" name="perihal" class="form-control" id="perihal" placeholder="Perihal">
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
                                    <input type="text" name="nomor_surat" class="form-control" id="nomor_surat" placeholder="Nomor Surat">
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
                                        <input type="text" name="tanggal_surat" class="form-control pull-right" id="datepicker" placeholder="Tanggal Surat">
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
                                    <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" placeholder="Nama Kegiatan">
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
                                        <input type="text" name="tanggal_pelaksanaan" class="form-control pull-right" id="datepicker2" placeholder="Tanggal Pelaksanaan">
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
                            <textarea name="isi_surat" id="isi_surat" class="form-control" rows="3" style="resize:none" maxlength="500" placeholder="Isi Surat"></textarea>
                            @error('isi_surat')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Keterangan | name:keterangan -->
                        <div class="form-group @error('keterangan') has-error @enderror">
                            <label for="keterangan">
                                @error('keterangan') <i class="fa fa-times-circle-o"></i> @enderror Keterangan
                            </label>
                            <textarea name="keterangan" id="keterangan" class="form-control" rows="3" style="resize:none" maxlength="500" placeholder="Keterangan"></textarea>
                            @error('keterangan')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="button" class="btn btn-flat btn-default" onclick="window.location.href='{{ route('surat-masuk.index') }}' ">
                            <i class="fa fa-reply"></i>&nbsp; Kembali
                        </button>
                        <button type="submit" class="btn btn-flat btn-primary">
                            <i class="fa fa-save"></i>&nbsp; Simpan
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
