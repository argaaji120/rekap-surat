@extends('layouts.app')

@section('title', '| Edit Data User')

@section('content')
<section class="content-header">
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Users</li>
        <li class="active">Edit User</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data User</h3>
                </div>

                <form action="{{route('users.update', [$user->id])}}" method="POST" role="form" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        <input type="hidden" value="PUT" name="_method">

                        <!-- username -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ $user->username }}" readonly>
                        </div>

                        <!-- name -->
                        <div class="form-group @error('name') has-error @enderror">
                            <label for="name">
                                @error('name') <i class="fa fa-times-circle-o"></i> @enderror Nama
                            </label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="{{ old('name') ? old('name') : $user->name }}">
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
                                    <input {{ $user->roles == "Administrator" ? "checked" : "" }} type="radio" name="roles" value="Administrator" class="flat-blue">&nbsp; Administrator
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input {{ $user->roles == "Sekretaris" ? "checked" : "" }} type="radio" name="roles" value="Sekretaris" class="flat-blue">&nbsp; Sekretaris
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
                            <small><i>Kosongkan jika tidak ingin mengubah password</i></small>
                            @error('password')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- password_confirmation -->
                        <div class="form-group @error('password_confirmation') has-error @enderror">
                            <label for="password_confirmation">
                                @error('password_confirmation') <i class="fa fa-times-circle-o"></i> @enderror Konfirmasi Password
                            </label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation">
                            @error('password_confirmation')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- status -->
                        <div class="form-group @error('status') has-error @enderror">
                            <label>
                                @error('status') <i class="fa fa-times-circle-o"></i> @enderror Status
                            </label>
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
                            @error('status')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="box-footer">
                        <!-- Kembali -->
                        <button type="button" class="btn btn-flat btn-default" onclick="window.location.href='{{ route('users.index') }}'">
                            <i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali
                        </button>

                        <!-- Update -->
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
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue'
        , radioClass: 'iradio_square-blue'
        , increaseArea: '20%' /* optional */
    });

</script>
@endpush
