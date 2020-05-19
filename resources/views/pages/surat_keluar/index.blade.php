@extends('layouts.app')

@section('title', '| Surat Keluar')

@section('content')
<section class="content-header">
  <h1>Surat Keluar</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Surat Keluar</li>
  </ol>
</section>

<section class="content">

  @if (session('status'))
  <div class="alert alert-success alert-dismissible" id="alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
    <p>{{ session('status') }}</p>
  </div>
  @endif

  <div class="row">
    <div class="col-xs-12">
      <div class="box box-secondary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Surat Keluar Periode {{ $periode->periode }}</h3>
          <a href="{{ route('surat-keluar.create') }}" class="btn btn-sm btn-flat btn-primary pull-right">
            <i class="fa fa-plus"></i>&nbsp; Tambah Surat
          </a>
          <a href="{{ route('surat-keluar.export') }}"
            class="btn btn-sm btn-flat btn-default pull-right {{ count($surat_keluar) == 0 ? 'disabled' : '' }}"
            style="margin-right:5px">
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
                  <th>Penerima</th>
                  <th>Perihal</th>
                  <th>Nomor Surat</th>
                  <th>Tanggal Surat</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($surat_keluar as $surat)
                <tr>
                  <td>{{ $surat->tahun }}</td>
                  <td>{{ $surat->bulan }}</td>
                  <td>{{ $surat->penerima }}</td>
                  <td>{{ $surat->perihal }}</td>
                  <td>{{ $surat->nomor_surat }}</td>
                  <td>{{ date('d F Y', strtotime($surat->tanggal_surat)) }}</td>
                  <td>
                    <button type="button"
                      onclick="window.location.href='{{ route('surat-keluar.edit', [$surat->id]) }}'"
                      class="btn btn-sm btn-flat btn-primary">
                      <i class="fa fa-edit"></i>
                    </button>

                    <form action="{{ route('surat-keluar.destroy', [$surat->id]) }}" method="post"
                      style="display:inline">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">

                      <button type="button" data-toggle="modal" data-target="#modal-delete{{ $surat->id }}"
                        class="btn btn-flat btn-sm btn-danger">
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
                                Surat untuk <b>{{ $surat->penerima }}</b> dengan nomor
                                <b>{{ $surat->nomor_surat }}</b> akan dihapus.<br>
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
  $('#example1').DataTable()
</script>
<script>
  $(document).ready(function() {
    $("#alert-success").delay(3000).fadeOut();
  });
</script>
@endpush