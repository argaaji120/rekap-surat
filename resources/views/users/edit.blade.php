@extends('layouts.app')

@section('title', '| Edit Data User')

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
                      <h3 class="box-title">Edit Data User</h3>
                    </div>

                    <form action="{{route('users.update', [$user->id])}}" enctype="multipart/form-data" method="POST" role="form" autocomplete="off">
                        @csrf
                        <div class="box-body">
                            <input type="hidden" value="PUT" name="_method">
                            
                            <!-- Username -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ $user->username }}" readonly>
                            </div>
                            
                            <!-- Nama -->
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ $user->name }}">
                            </div>
                            
                            <!-- Role -->
                            <div class="form-group">
                                <label for="">Roles</label>
                                <div class="radio">
                                    <label>
                                        <input {{ $user->roles == "Administrator" ? "checked" : "" }} type="radio" name="roles" value="Administrator" class="flat-blue">&nbsp; Administrator
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input {{ $user->roles == "Sekretaris" ? "checked" : "" }} type="radio" name="roles" value="Sekretaris" class="flat-blue">&nbsp; Sekretaris
                                    </label>
                                </div>
                            </div>

                            <!-- Foto -->
                            <div class="form-group">
                                <label for="avatar">Foto</label>
                                @if ($user->avatar)
                                    <img src="{{ asset('storage/'.$user->avatar) }}" width="100px" class="img-responsive" alt="User Image">
                                @else
                                    <img src="{{ asset('assets/dist/img/profile_avatar.jpg') }}" width="20%" class="img-responsive" alt="avatar">
                                @endif
                                <br>
                                <input type="file" name="avatar" id="avatar">
                                <small><i>Kosongkan jika tidak ingin mengubah foto</i></small>
                                <p class="help-block">*<i>notice:</i> ukuran foto maksimal 2 MB</p>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                <small><i>Kosongkan jika tidak ingin mengubah password</i></small>
                            </div>

                            <!-- Password Comfirmation -->
                            <div class="form-group">
                                <label for="password_confirmation">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation">
                            </div>

                            <!-- Status -->
                            <div class="form-group">
                                <label>Status</label>
                                <div class="radio">
                                    <label>
                                        <input {{ $user->status == "ACTIVE" ? "checked" : "" }} id="status" type="radio" name="status" value="ACTIVE" class="flat-blue">&nbsp; Active
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input {{ $user->status == "INACTIVE" ? "checked" : "" }} id="status" type="radio" name="status" value="INACTIVE" class="flat-blue">&nbsp; Inactive
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <!-- Kembali -->
                            <button type="button" class="btn btn-flat btn-default" onclick="window.location.href='{{ route('users.index') }}'">
                                <i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali
                            </button>
                            
                            <!-- Update -->
                            <button type="submit" name="update" class="btn btn-flat btn-primary">
                                <i class="fa fa-save"></i>&nbsp; Update
                            </button>
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
