@extends('layouts.app')

@section('title', '| Input Data User')

@section('link')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('assets/plugins/iCheck/square/blue.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <h1>User</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Input Data User</h3>
                    </div>

                    <form action="{{route('users.store')}}" enctype="multipart/form-data" method="POST" role="form" autocomplete="off">
                        @csrf
                        <div class="box-body">

                            <!-- Username -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                            </div>
                            
                            <!-- Nama -->
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Roles</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="roles" value="Administrator" class="flat-blue">&nbsp; Administrator
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="roles" value="Sekretaris" class="flat-blue">&nbsp; Sekretaris
                                    </label>
                                </div>
                            </div>

                            <!-- Foto -->
                            <div class="form-group">
                                <label for="avatar">Foto</label>
                                <input type="file" name="avatar" id="avatar">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>

                            <!-- Password Comfirmation -->
                            <div class="form-group">
                                <label for="password_confirmation">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation">
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="button" class="btn btn-flat btn-default" onclick="window.location.href='{{ route('users.index') }}'">
                                <i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali
                            </button>
                            <button type="submit" name="simpan" class="btn btn-flat btn-primary"><i class="fa fa-save"></i>&nbsp; Simpan</button>
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
    <!-- iCheck -->
    <script src="{{ url('assets/plugins/iCheck/icheck.min.js') }}"></script>
@endsection

@section('custom-script')
   <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
   </script>
@endsection
