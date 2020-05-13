@extends('layouts.app')

@section('title', '| Surat Masuk')

@section('content')
<section class="content-header">
    <h1>Surat Masuk</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Surat Masuk</li>
    </ol>
</section>

<section class="content">

    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
        <p>{{ session('status') }}</p>
    </div>
    @endif

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-secondary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Surat Masuk 2019/2020</h3>
                    <a href="{{ route('surat-masuk.create') }}" class="btn btn-sm btn-flat btn-primary pull-right">
                        <i class="fa fa-plus"></i>&nbsp; Tambah Surat
                    </a>
                    <a href="" class="btn btn-sm btn-flat btn-default pull-right" style="margin-right:5px">
                        <i class="fa  fa-file"></i>&nbsp; Export Excel
                    </a>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Bulan</th>
                                    <th>Asal Surat</th>
                                    <th>Perihal</th>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($surat_masuk as $surat)
                                <tr>
                                    <td>{{ $surat->tahun }}</td>
                                    <td>{{ $surat->bulan }}</td>
                                    <td>{{ $surat->asal_surat }}</td>
                                    <td>{{ $surat->perihal }}</td>
                                    <td>{{ $surat->nomor_surat }}</td>
                                    <td>{{ date('d F Y', strtotime($surat->tanggal_surat)) }}</td>
                                    <td>
                                        <button type="button" onclick="window.location.href='{{ route('surat-masuk.edit', [$surat->id]) }}'" class="btn btn-sm btn-flat btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <form action="{{ route('surat-masuk.destroy', [$surat->id]) }}" method="post" style="display:inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="button" data-toggle="modal" data-target="#modal-delete{{ $surat->id }}" class="btn btn-flat btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <!-- Modal Konfirmasi Delete -->
                                            <div class="modal fade" id="modal-delete{{ $surat->id }}" role="dialog">
                                                <div class="modal-dialog modal-md" style="vertical-align:middle">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h5 class="modal-title">Konfirmasi Delete</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                Surat dari <b>{{ $surat->asal_surat }}</b> dengan nomor <b>{{ $surat->nomor_surat }}</b> akan dihapus.<br>
                                                                Apakah Anda yakin?
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" name="delete" class="btn btn-sm btn-flat btn-primary">
                                                                Yakin
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-flat btn-default" data-dismiss="modal">
                                                                Tidak
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('after-script')
<script>
    $(function() {
        $('#example1').DataTable()
    })

</script>
@endpush
