@extends('layouts.app')

@section('title', '| User')

@section('link')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <style>
        .modal {
            text-align: center;
            padding: 0!important;
        }

        .modal:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -4px;
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }
    </style>
@endsection

@section('content')
    <section class="content-header">
        <h1>User</h1>
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
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Daftar User</h3>
                        <a href="{{ route("users.create") }}" class="btn btn-sm btn-flat btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp; Tambah User</a>
                    </div>
                
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->roles }}</td>
                                            <td>
                                                @if ($user->status == "ACTIVE")
                                                    <small class="external-event bg-light-blue">{{ $user->status }}</small>
                                                @else
                                                    <small class="external-event bg-red">{{ $user->status }}</small>  
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" onclick="window.location.href='{{route('users.edit',[$user->id])}}'" class="btn btn-sm btn-flat btn-primary">Edit</button>
                                                <form action="{{route('users.destroy', [$user->id])}}" method="post" style="display:inline">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="button" data-toggle="modal" data-target="#modal-default{{$user->id}}" class="btn btn-flat btn-sm btn-danger">Delete</button>
                                                    
                                                    <!-- Modal Konfirmasi Delete -->
                                                    <div class="modal fade" id="modal-default{{$user->id}}" role="dialog">
                                                        <div class="modal-dialog modal-sm" style="vertical-align:middle">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <h5 class="modal-title">Konfirmasi Delete</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Apakah Anda yakin ingin menghapus user <b> {{ $user->name }}</b> ?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="delete" class="btn btn-sm btn-flat btn-primary">Ya, Saya yakin</button>
                                                                    <button type="button" class="btn btn-sm btn-flat btn-default" data-dismiss="modal">Tidak</button>
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

@section('script')
    <!-- DataTables -->
    <script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endsection

@section('custom-script')
    <script>
        $(function () {
            $('#example2').DataTable()
            $('#example1').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                "columnDefs"  : [
                {
                    "targets": 4,
                    "orderable": false,
                    "width": "20%"
                } ],
            })
        })
    </script>
@endsection