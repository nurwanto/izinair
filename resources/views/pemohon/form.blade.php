@extends('app')
@section('title')
    Form
@endsection
@section('menu')
    <li class="active"><a href="{{ URL::to('izinair/pemohon') }}">home</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/persyaratan') }}">persyaratan</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/daftarizin') }}">daftar izin</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/notifikasi') }}">notifikasi</a></li>
    <li>{{session('nik')}} | <a href="{{url('logout')}}")>Logout</a></li>
@endsection
@section('navigation')
    <ol class="breadcrumb">
        <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
        <li class="active">Form</li>
    </ol>
@endsection
@section('content')
    <div class="main">
        <h6>
            <div class="tabular">
                <div class="container">
                <ol class="breadcrum">
                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">Air Bawah Tanah</label>
                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">Air Permukaan</label>
                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">Air Buangan</label>
                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4">Alur,Bentuk,Dimensi...</label>
                        <section id="content1">
                        <div class="main"><!-- start main -->
                            <div class="container">
                                <div class="row contact">
                                    <div class="col-md-10">
                                        <div class="contact-form">
                                            {!! Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => 'izinair/pemohon/daftarizin/1']) !!}
                                            <h2>Data Pemohon</h2>
                                            <!-- <form class="form-horizontal" role="form" method="post" action="1"> -->
                                            <div class="form-group">
                                                {!! Form::label('telp','No Telp/ No Hp', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('email','Email Pemohon', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <h2>Data Izin</h2>
                                            <div class="form-group">
                                                {!! Form::label('teknis','Rekomendasi Teknis', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('teknis', null, ['class' => 'form-control']) !!}dari Dinas Pertambangan dan Energi Propinsi Jawa Barat
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('bor','Kepemilikan instalasi bor', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('bor', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('keberatan','Pernyataan tidak keberatan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('keberatan', null, ['class' => 'form-control']) !!}dari masyarakat sekitar proyek
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('konservasi','Pernyataan konservasi dan Pelestarian Alam', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('konservasi', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <h2>Data Izin</h2>
                                            <div class="form-group">
                                                {!! Form::label('alamat','Alamat Lokasi Izin', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::textarea('alamat', null, ['class' => 'form-control', 'rows' => '5']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('luas','Luas Lokasi Izin', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('luas', null, ['class' => 'form-control', 'placeholder' => 'meter2']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('usaha','Kegiatan Usaha', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('usaha', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    {!! Form::submit('Ajukan', ['class' => 'btn btn-default']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close() !!}<!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                                @if($errors->any())
                                    @foreach($errors as $e)
                                        {{$e}}
                                    @endforeach
                                @endif
                                <div class="clearfix"></div>
                            </div> <!-- end contact -->
                        </div>
                    </section>
                    <section id="content2">
                        <div class="main"><!-- start main -->
                            <div class="container">
                                <div class="row contact">
                                    <div class="col-md-10">
                                        <div class="contact-form">
                                            {!! Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => 'izinair/pemohon/daftarizin/2']) !!}
                                            <h2>Data Pemohon</h2>
                                            <!-- <form class="form-horizontal" role="form" method="post" action="1"> -->
                                            <div class="form-group">
                                                {!! Form::label('telp','No Telp/ No Hp', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('email','Email Pemohon', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <h2>Data Izin</h2>
                                            <div class="form-group">
                                                {!! Form::label('akta','Akta Pendirian Perusahaan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('akta', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('no_imb','Nomor IMB', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('no_imb', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('surat_tanah','Surat Tanah', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('surat_tanah', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('domisili','Keterangan Domisili', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('domisili', null, ['class' => 'form-control']) !!}dari lurah/camat setempat
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('keberatan','Pernyataan tidak Keberatan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('keberatan', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('pelestarian','Pernyataan Pelestarian Alam', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('pelestarian', null, ['class' => 'form-control']) !!}dari lurah/camat setempat
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('no_pbb','No PBB', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('no_pbb', null, ['class' => 'form-control']) !!}PBB tahun terakhir
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('teknis','Proposal Teknis', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('teknis', null, ['class' => 'form-control']) !!}kebutuhan dan penggunaan air
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('dbmp','Rekomendasi dari DBMP', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('dbmp', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('lurah','Rekomendasi dari Lurah/Camat', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('lurah', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    {!! Form::submit('Ajukan', ['class' => 'btn btn-default']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close() !!}<!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                                @if($errors->any())
                                    @foreach($errors as $e)
                                        {{$e}}
                                    @endforeach
                                @endif
                                <div class="clearfix"></div>
                            </div> <!-- end contact -->
                        </div>
                    </section>
                    <section id="content3">
                        <div class="main"><!-- start main -->
                            <div class="container">
                                <div class="row contact">
                                    <div class="col-md-10">
                                        <div class="contact-form">
                                            {!! Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => 'izinair/pemohon/daftarizin/3']) !!}
                                            <h2>Data Pemohon</h2>
                                            <div class="form-group">
                                                {!! Form::label('telp','No Telp/ No Hp', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('email','Email Pemohon', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <h2>Data Izin</h2>
                                            <div class="form-group">
                                                {!! Form::label('akta','Akta Pendirian Perusahaan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('akta', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('no_imb','Nomor IMB', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('no_imb', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('surat_tanah','Surat Tanah', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('surat_tanah', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('domisili','Keterangan Domisili', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('domisili', null, ['class' => 'form-control']) !!}dari lurah/camat setempat
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('keberatan','Pernyataan tidak Keberatan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('keberatan', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('pelestarian','Pernyataan Pelestarian Alam', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('pelestarian', null, ['class' => 'form-control']) !!}dari lurah/camat setempat
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('no_pbb','No PBB', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('no_pbb', null, ['class' => 'form-control']) !!}tahun terakhir
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('teknis','Proposal Teknis', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('teknis', null, ['class' => 'form-control']) !!}rencana volume air yang akan dibuang
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('dbmp','Rekomendasi dari DBMP', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('dbmp', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('bplh','Rekomendasi dari BPLH', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('bplh', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    {!! Form::submit('Ajukan', ['class' => 'btn btn-default']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close() !!}<!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                                @if($errors->any())
                                    @foreach($errors as $e)
                                        {{$e}}
                                    @endforeach
                                @endif
                                <div class="clearfix"></div>
                            </div> <!-- end contact -->
                        </div>
                    </section>
                    <section id="content4">
                        <div class="main"><!-- start main -->
                            <div class="container">
                                <div class="row contact">
                                    <div class="col-md-10">
                                        <div class="contact-form">
                                            {!! Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => 'izinair/pemohon/daftarizin/4']) !!}
                                            <h2>Data Pemohon</h2>
                                            <!-- <form class="form-horizontal" role="form" method="post" action="1"> -->
                                            <div class="form-group">
                                                {!! Form::label('telp','No Telp/ No Hp', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('email','Email Pemohon', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <h2>Data Izin</h2>
                                            <div class="form-group">
                                                {!! Form::label('akta','Akta Pendirian Perusahaan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('akta', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('no_imb','Nomor IMB', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('no_imb', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('surat_tanah','Surat Tanah', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('surat_tanah', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('domisili','Keterangan Domisili', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('domisili', null, ['class' => 'form-control']) !!}dari lurah/camat setempat
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('keberatan','Pernyataan tidak Keberatan', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('keberatan', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('pelestarian','Pernyataan Pelestarian Alam', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('pelestarian', null, ['class' => 'form-control']) !!}dari lurah/camat setempat
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('no_pbb','No PBB', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::text('no_pbb', null, ['class' => 'form-control']) !!}PBB tahun terakhir
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('profil','Profil', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('profil', null, ['class' => 'form-control']) !!}Profil memanjang dan melintang dari saluran baru
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('berita','Berita Acara', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('berita', null, ['class' => 'form-control']) !!}Serah terima lahan saluran lama dan baru
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('dbmp','Rekomendasi dari DBMP', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('dbmp', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('lurah','Rekomendasi dari Lurah/Camat', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
                                                <div class="col-sm-10">
                                                    {!! Form::file('lurah', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    {!! Form::submit('Ajukan', ['class' => 'btn btn-default']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close() !!}<!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- end contact -->
                        </div>
                    </section>
                </ol>
            </div>
                </div>
        </h6>
    </div>
@stop