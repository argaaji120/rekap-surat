@extends('layouts.app')

@section('title', '| Surat Masuk')

@section('link')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <h1>Surat Masuk</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Surat Masuk 2019/2020</h3>
                        <a href="{{ route('add-surat-masuk') }}" class="btn btn-sm btn-flat btn-primary pull-right">
                            <i class="fa fa-plus"></i>&nbsp; Tambah Surat
                        </a>
                        <a href="" class="btn btn-sm btn-flat btn-default pull-right" style="margin-right:5px">
                            <i class="fa  fa-file"></i>&nbsp; Export Excel
                        </a>
                    </div>
                
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tahun</th>
                                        <th>Bulan</th>
                                        <th>Nomor</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- DataTables -->
    <script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endsection

@section('custom-script')
    <script>
        $(function () {
            $('#example1').DataTable()
        })
    </script>
@endsection