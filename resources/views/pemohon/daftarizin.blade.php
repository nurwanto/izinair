@extends('app')
@section('title')
    Daftar Izin
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pemohon') }}">home</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/persyaratan') }}">persyaratan</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pemohon/daftarizin') }}">daftar izin</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/notifikasi') }}">notifikasi</a></li>
    <li>{{session('nik')}} | <a href="{{ URL::to('/izinair/logout')}}")>Logout</a></li>
@endsection
@section('navigation')
    <ol class="breadcrumb">
        <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
        <li class="active">Form</li>
    </ol>
@endsection
@section('script')
    <script>
        function confirmBatal(jenis,id) {
            if (confirm("Apakah Anda yakin ingin meminta pembatalan izin?") == true) {
                location.href = "/izinair/pemohon/pembatalan/"+jenis+"/"+id;
            } else {

            }
        }
        function confirmAdu(jenis,id) {
            if (confirm("Apakah Anda yakin ingin melakukan pengaduan pembatalan?") == true) {
                location.href = "/izinair/pemohon/pengaduan/"+jenis+"/"+id;
            } else {

            }
        }
        function confirmPerpanjang(jenis,id) {
            if (confirm("Apakah Anda yakin ingin meminta perpanjangan izin?") == true) {
                location.href = "/izinair/pemohon/perpanjangan/"+jenis+"/"+id;
            } else {

            }
        }
    </script>
@endsection
@section('content')
    <div class="main">
        <h6>
            <div class= "tabular">
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
                                                @if($form_->status == 'selesai')
                                                    <td><a href="javascript:confirmBatal(1,{{$form_->id}})">batalkan</a></td>
                                                @elseif($form_->status == 'ditolak')
                                                    <td><a href="javascript:confirmAdu(1,{{$form_->id}})">adukan</a></td>
                                                @elseif($form_->status == 'diterima')
                                                    <td><a href="javascript:confirmPerpanjang(1,{{$form_->id}})">perpanjang</a></td>
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
                                                @if($form_->status == 'selesai')
                                                    <td><a href="javascript:confirmBatal(2,{{$form_->id}})">batalkan</a></td>
                                                @elseif($form_->status == 'ditolak')
                                                    <td><a href="javascript:confirmAdu(2,{{$form_->id}})">adukan</a></td>
                                                @elseif($form_->status == 'diterima')
                                                    <td><a href="javascript:confirmPerpanjang(2,{{$form_->id}})">perpanjang</a></td>
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
                                                @if($form_->status == 'selesai')
                                                    <td><a href="javascript:confirmBatal(3,{{$form_->id}})">batalkan</a></td>
                                                @elseif($form_->status == 'ditolak')
                                                    <td><a href="javascript:confirmAdu(3,{{$form_->id}})">adukan</a></td>
                                                @elseif($form_->status == 'diterima')
                                                    <td><a href="javascript:confirmPerpanjang(3,{{$form_->id}})">perpanjang</a></td>
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
                                                @if($form_->status == 'selesai')
                                                    <td><a href="javascript:confirmBatal(4,{{$form_->id}})">batalkan</a></td>
                                                @elseif($form_->status == 'ditolak')
                                                    <td><a href="javascript:confirmAdu(4,{{$form_->id}})">adukan</a></td>
                                                @elseif($form_->status == 'diterima')
                                                    <td><a href="javascript:confirmPerpanjang(4,{{$form_->id}})">perpanjang</a></td>
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
        </h6>
    </div>
@stop