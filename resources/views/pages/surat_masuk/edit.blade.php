@extends('layouts.app')

@section('title', '| Edit Surat Masuk')

@section('link')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <h1>Surat Masuk</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Edit Surat Masuk</h3>
                    </div>

                    <form role="form" autocomplete="off" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <!-- Tahun -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Tahun">
                                    </div>        
                                </div>

                                <!-- Bulan -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bulan">Bulan</label><br>
                                        <select class="form-control select2" name="bulan" id="bulan">
                                            <option selected disabled>Pilih Bulan</option>
                                            <option value="Januari"     >Januari</option>
                                            <option value="Februari"    >Februari</option> 
                                            <option value="Maret"       >Maret</option>
                                            <option value="April"       >April</option>
                                            <option value="Mei"         >Mei</option>
                                            <option value="Juni"        >Juni</option>
                                            <option value="Juli"        >Juli</option>
                                            <option value="Agustus"     >Agustus</option>
                                            <option value="September"   >September</option>
                                            <option value="Oktober"     >Oktober</option>
                                            <option value="November"    >November</option>
                                            <option value="Desember"    >Desember</option>
                                        </select>
                                    </div>       
                                </div>
                            </div>

                            <div class="row">
                                <!-- Nomor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nomor">Nomor</label>
                                        <input type="text" name="nomor" class="form-control" id="nomor" placeholder="Nomor">
                                    </div>        
                                </div>

                                <!-- Asal Surat -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="asal_surat">Asal Surat</label>
                                        <input type="text" name="asal_surat" class="form-control" id="asal_surat" placeholder="Asal Surat">
                                    </div>        
                                </div>
                            </div>

                            <div class="row">
                                <!-- Perihal -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="perihal">Perihal</label>
                                        <input type="text" name="perihal" class="form-control" id="perihal" placeholder="Perihal">
                                    </div>
                                </div>

                                <!-- Tanggal Surat -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Surat</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Nomor Surat -->
                            <div class="form-group">
                                <label for="nomor_surat">Nomor Surat</label>
                                <input type="text" name="nomor_surat" class="form-control" id="nomor_surat" placeholder="Nomor surat">
                            </div>
                            
                            <!-- Isi Surat -->
                            <div class="form-group">
                                <label for="isi_surat">Isi Surat</label>
                                <textarea name="isi_surat" id="isi_surat" class="form-control" rows="3" style="resize:none" maxlength="500" placeholder="Isi Surat"></textarea>
                            </div>

                            <!-- Keterangan -->
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" rows="3" style="resize:none" maxlength="500" placeholder="Keterangan"></textarea>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="button" class="btn btn-flat btn-default" onclick="window.location.href='{{ route('surat-masuk') }}'">
                                <i class="fa fa-reply"></i>&nbsp; Kembali
                            </button>
                            <button type="submit" class="btn btn-flat btn-primary"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- bootstrap datepicker -->
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>
@endsection

@section('custom-script')
    <script>
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
@endsection
