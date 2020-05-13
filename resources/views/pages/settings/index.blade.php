@extends('layouts.app')

@section('title', '| Pengaturan')

@section('content')
<section class="content-header">
    <h1>Pengaturan</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Pengaturan</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Hapus Surat Masuk</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="POST" autocomplete="off">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan Periode">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-danger btn-flat">Hapus</button>
                            </span>
                        </div>
                        <span class="help-block">Contoh: 2019/2020</span>
                    </form>
                </div>
            </div>

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Hapus Surat Masuk</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="POST" autocomplete="off">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan Periode">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-danger btn-flat">Hapus</button>
                            </span>
                        </div>
                        <span class="help-block">Contoh: 2019/2020</span>
                    </form>
                </div>
            </div>
        </div>

        {{-- Periode --}}
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Periode</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="{{ route('pengaturan.periode', [$periode->id]) }}" method="POST" autocomplete="off">
                        @csrf
                        <input type="hidden" value="PUT" name="_method">
                        <div class="input-group @error('periode') has-error @enderror">
                            <input type="text" name="periode" value="{{ old('periode') ? old('periode') : $periode->periode }}" class="form-control" placeholder="Masukkan Periode">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                            </span>
                        </div>
                        <span class="help-block">Contoh: 2019/2020</span>
                        @error('periode')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
