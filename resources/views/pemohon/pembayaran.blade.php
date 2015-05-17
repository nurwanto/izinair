@extends('app')
@section('title')
    Pembayaran
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pemohon') }}">home</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/persyaratan') }}">persyaratan</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pemohon/daftarizin') }}">daftar izin</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/notifikasi') }}">notifikasi</a></li>
@endsection
@section('navigation')
    <ol class="breadcrumb">
        <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
        <li><a href="{{URL::to('izinair/pemohon/daftarizin')}}">Daftar Izin</a></li>
        <li class="active">Pembayaran</li>
    </ol>
@endsection
@section('content')
    <div class="main"><!-- start main -->
        <div class="container">
            <div class="row contact">
                <div class="col-md-10">
                    <div class="contact-form">
                        <h2>Data Teknis Izin Air</h2>
                        {!! Form::open(['class' => 'form-horizontal', 'url' => 'izinair/pemohon/daftarizin/pembayaran']) !!}
                        {!! Form::hidden('id_izin', $id, ['class' => 'form-control']) !!}
                        {!! Form::hidden('jenis_izin', $jenis, ['class' => 'form-control']) !!}
                        <div class="form-group">
                            {!! Form::label('bukti','Bukti Pembayaran', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('bukti', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Kirim', ['class' => 'btn btn-default']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end contact -->
        </div>
    </div>
@stop