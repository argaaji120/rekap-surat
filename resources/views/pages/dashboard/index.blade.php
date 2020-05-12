@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Dashboard</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>
                        <h4><b>Surat Masuk</b></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document-text"></i>
                    </div>
                    <a href="#" class="small-box-footer">Lihat semua <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
           
            <div class="col-lg-6 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>53</h3>
                        <h4><b>Surat Keluar</b></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document-text"></i>
                    </div>
                    <a href="#" class="small-box-footer">Lihat semua <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
           
        </div>
    </section>
@endsection