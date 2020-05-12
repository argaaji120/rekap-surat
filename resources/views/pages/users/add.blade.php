@extends('layouts.app')

@section('title', '| Input Data User')

@section('content')
<section class="content-header">
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Users</li>
        <li class="active">Tambah User</li>
    </ol>
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

                        <!-- username -->
                        <div class="form-group @error('username') has-error @enderror">
                            <label for="username">
                                @error('username') <i class="fa fa-times-circle-o"></i> @enderror Username
                            </label>
                            <input type="text" name="username" class="form-control" id="username" value="{{ old('username') }}" placeholder="Username">
                            @error('username')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- name -->
                        <div class="form-group @error('name') has-error @enderror">
                            <label for="name">
                                @error('name') <i class="fa fa-times-circle-o"></i> @enderror Nama
                            </label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Nama">
                            @error('name')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- roles -->
                        <div class="form-group @error('roles') has-error @enderror">
                            <label for="">
                                @error('roles') <i class="fa fa-times-circle-o"></i> @enderror Roles
                            </label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="roles" value="Administrator" class="flat-blue" {{ old('roles') == "Administrator" ? "checked" : "" }}>&nbsp; Administrator
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="roles" value="Sekretaris" class="flat-blue" {{ old('roles') == "Sekretaris" ? "checked" : "" }}>&nbsp; Sekretaris
                                </label>
                            </div>
                            @error('roles')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- password -->
                        <div class="form-group @error('password') has-error @enderror">
                            <label for="password">
                                @error('password') <i class="fa fa-times-circle-o"></i> @enderror Password
                            </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            @error('password')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- password_confirmation -->
                        <div class="form-group @error('password_confirmation') has-error @enderror">
                            <label for="password_confirmation">
                                @error('password_confirmation') <i class="fa fa-times-circle-o"></i> @enderror Konfirmasi Password
                            </label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Password">
                            @error('password_confirmation')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="button" class="btn btn-flat btn-default" onclick="window.location.href='{{ route('users.index') }}'">
                            <i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali
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
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue'
        , radioClass: 'iradio_square-blue'
        , increaseArea: '20%' /* optional */
    });

</script>
@endpush
