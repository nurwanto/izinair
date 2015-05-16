@extends('app')
@section('title')
	Daftar Izin
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pegawai') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pegawai/daftarizin') }}">daftar izin</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pegawai')}}">Home</a></li>
	  <li class="active"><a href="{{URL::to('izinair/pegawai/daftarizin')}}">daftar izin</a></li>
	</ol>
@endsection
@section('content')
	<div class="container">
		<div class="row  footer">
			<div class="contact-form">
				<h2>Daftar Izin</h2>
			</div>
			<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nomor Surat</th>
                        <th>Status</th>
                        <th>Masa Berlaku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($form as $form_)
                	@if($form_->status != 'selesai')
	                	<tr>
		                	<td>{{$form_->id}}</td>
		                	<td>{{$form_->status}}</td>
		                	<td>{{$form_->masa_berlaku}}</td>
		                	@if($form_->status == 'diajukan')
		                		<td><a href="/izinair/pegawai/validasi/1/{{$form_->id}}">validasi</a></td>
		                	@elseif(($form_->status == 'valid') || ($form_->status == 'tidak valid'))
		                		<td><a href="/izinair/pegawai/datateknis/1/{{$form_->id}}">data teknis</a></td>
		                	@elseif(($form_->status == 'diterima'))
		                		<td><a href="/izinair/pegawai/pembayaran/1/{{$form_->id}}">lihat pembayaran</a></td>
		                	@endif
                		</tr>
                	@endif
                @endforeach
                </tbody>
           	</table>
			<div class="clearfix"></div>
		</div>
	</div>
@stop