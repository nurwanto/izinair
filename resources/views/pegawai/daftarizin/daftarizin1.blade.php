
@extends('app')
@section('content')
<div class="header_bg"><!-- start header -->
	<div class="container">
		<div class="row header">
		<nav class="navbar" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{URL::to('izinair')}}"><img src="{{URL::asset('images/pemkot.png')}}" style="witdh:75px; height:75px" alt="" class="img-responsive"/> </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		        <li><a href="{{ URL::to('izinair/pegawai') }}">home</a></li>
		        <li class="active"><a href="{{ URL::to('izinair/pegawai/lihat') }}">daftar izin</a></li>
		      </ul>
		      <form class="navbar-form navbar-right" role="search">
		        <div class="form-group my_search">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Search</button>
		      </form>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
		<ol class="breadcrumb">
		  <li><a href="{{URL::to('izinair')}}">Home</a></li>
		  <li class="active"><a href="{{URL::to('izinair/pemohon/daftarizin/1')}}">daftar izin</li>
		</ol>
	</div>
</div>
<!-- <div class="footer_bg">start footre -->
	<div class="container">
		<div class="row  footer">
			<div class="contact-form">
				<h2>Daftar Izin 1</h2>
			</div>
			<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Surat</th>
                        <th>Jenis</th>
                        <th>Status</th>
                        <th>Masa Berlaku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($form as $form_)
                	<td>{{$form_->id}}</td>
                	<td>{{$form_->id}}</td>
                	<td>{{$form_->status}}</td>
                	<td>{{$form_->masa_berlaku}}</td>
                	<td>{{$form_->status}}</td>
                	@if($form->status = 'diajukan'){
                	<td><a href="{{URL::to('izinair/pemohon/batal/1/$form_->id')}}">batal</a></td>>
                	@endif
                @endforeach
                </tbody>
           </table>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- </div> -->
@stop