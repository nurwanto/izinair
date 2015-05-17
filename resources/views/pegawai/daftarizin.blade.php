@extends('app')
@section('title')
    Daftar Izin
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pegawai') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pegawai/daftarizin') }}">daftar izin</a></li>
    <div>1234567890 | <a href="/izinair/logout/12435678907654321">logout</a></div>
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
                        <div class="main">
                            <div class="container">
                                <div class="row  footer">
                                    <div class="contact-form">
                                        <h2>Daftar Izin Air Bawah Tanah</h2>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>Status</th>
                                            <th>Masa Berlaku</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($form1 as $form_)
                                            <tr>
                                                <td>{{$form_->id}}</td>
                                                <td>Izin air bawah tanah</td>
                                                @if(($form_->status == 'valid')||($form_->status == 'diajukan'))
                                                    <td>diajukan</td>
                                                    <td>-</td>
                                                @else
                                                    <td>{{$form_->status}}</td>
                                                    <td>{{$form_->masa_berlaku}}</td>
                                                @endif
                                                @if($form_->status == 'diajukan')
                                                    <td><a href="/izinair/pegawai/validasi/1/{{$form_->id}}">validasi</a></td>
                                                @elseif(($form_->status == 'valid') || ($form_->status == 'tidak valid'))
                                                    <td><a href="/izinair/pegawai/datateknis/1/{{$form_->id}}">data teknis</a></td>
                                                @elseif(($form_->status == 'diterima'))
                                                    <td><a href="/izinair/pegawai/pembayaran/1/{{$form_->id}}">lihat pembayaran</a></td>
                                                @else
                                                    <td></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="content2">
                        <div class="main">
                            <div class="container">
                                <div class="row  footer">
                                    <div class="contact-form">
                                        <h2>Daftar Izin Pengambilan Air Permukaan</h2>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>Status</th>
                                            <th>Masa Berlaku</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($form2 as $form_)
                                            <tr>
                                                <td>{{$form_->id}}</td>
                                                <td>Izin air bawah tanah</td>
                                                <td>{{$form_->status}}</td>
                                                <td>{{$form_->masa_berlaku}}</td>
                                                @if($form_->status == 'diajukan')
                                                    <td><a href="/izinair/pegawai/validasi/2/{{$form_->id}}">validasi</a></td>
                                                @elseif(($form_->status == 'valid') || ($form_->status == 'tidak valid'))
                                                    <td><a href="/izinair/pegawai/datateknis/2/{{$form_->id}}">data teknis</a></td>
                                                @elseif(($form_->status == 'diterima'))
                                                    <td><a href="/izinair/pegawai/pembayaran/2/{{$form_->id}}">lihat pembayaran</a></td>
                                                @else
                                                    <td></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="content3">
                        <div class="main">
                            <div class="container">
                                <div class="row  footer">
                                    <div class="contact-form">
                                        <h2>Daftar Izin Pembuangan Air Buangan ke Sumber Air</h2>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>Status</th>
                                            <th>Masa Berlaku</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($form3 as $form_)
                                            <tr>
                                                <td>{{$form_->id}}</td>
                                                <td>Izin air bawah tanah</td>
                                                <td>{{$form_->status}}</td>
                                                <td>{{$form_->masa_berlaku}}</td>
                                                @if($form_->status == 'diajukan')
                                                    <td><a href="/izinair/pegawai/validasi/3/{{$form_->id}}">validasi</a></td>
                                                @elseif(($form_->status == 'valid') || ($form_->status == 'tidak valid'))
                                                    <td><a href="/izinair/pegawai/datateknis/3/{{$form_->id}}">data teknis</a></td>
                                                @elseif(($form_->status == 'diterima'))
                                                    <td><a href="/izinair/pegawai/pembayaran/3/{{$form_->id}}">lihat pembayaran</a></td>
                                                @else
                                                    <td></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="content4">
                        <div class="main">
                            <div class="container">
                                <div class="row  footer">
                                    <div class="contact-form">
                                        <h2>Daftar Izin Perubahan Alur, Bentuk, Dimensi, dan Kemiringan Dasar Saluran/Sungai</h2>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>Status</th>
                                            <th>Masa Berlaku</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($form4 as $form_)
                                            <tr>
                                                <td>{{$form_->id}}</td>
                                                <td>Izin air bawah tanah</td>
                                                <td>{{$form_->status}}</td>
                                                <td>{{$form_->masa_berlaku}}</td>
                                               @if($form_->status == 'diajukan')
                                                    <td><a href="/izinair/pegawai/validasi/4/{{$form_->id}}">validasi</a></td>
                                                @elseif(($form_->status == 'valid') || ($form_->status == 'tidak valid'))
                                                    <td><a href="/izinair/pegawai/datateknis/4/{{$form_->id}}">data teknis</a></td>
                                                @elseif(($form_->status == 'diterima'))
                                                    <td><a href="/izinair/pegawai/pembayaran/4/{{$form_->id}}">lihat pembayaran</a></td>
                                                @else
                                                    <td></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </section>
                </ol>
            </div>
            </div>
        </h6>
    </div>
@stop