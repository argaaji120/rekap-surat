@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>Dashboard</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-lg-6 col-xs-6">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-document-text"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Surat Masuk</span>
                    <span class="info-box-number">1,410</span>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xs-6">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-document-text"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Surat Keluar</span>
                    <span class="info-box-number">1,410</span>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
