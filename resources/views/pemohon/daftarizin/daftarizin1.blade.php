<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Daftar Izin | Izin Air PemKot Bandung</title>
<!-- Bootstrap -->
<link href="{{URL::asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<link href="{{URL::asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--  webfonts  -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- // webfonts  -->
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<style>
	.table {font-size: 14px}
</style>
</head>
<body>
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
		        <li><a href="{{URL::to('izinair')}}">home</a></li>
		        <li><a href="{{URL::to('izinair/pemohon/persyaratan')}}">persyaratan</a></li>
		        <li class="active"><a href="{{URL::to('pemohon/lihat')}}">daftar izin</a></li>
		        <li><a href="{{URL::to('izinair/pemohon/tentang')}}">tentang</a></li>
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
		  <li class="active">daftar izin</li>
		</ol>
	</div>
</div>
<!-- <div class="footer_bg">start footre -->
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
                @foreach($form as $form_)
                	<td>{{$form_->id}}</td>
                	<td>Izin air bawah tanah</td>
                	<td>{{$form_->status}}</td>
                	<td>{{$form_->masa_berlaku}}</td>
        			@if($form_->status = 'diterima')
                		<td><a href="{{URL::to('izinair/pemohon/pembatalan/1/.$form_->id')}}">batalkan</a></td>>
        			@endif
        			@if($form_->status = 'ditolak')
                		<td><a href="{{URL::to('izinair/pemohon/pengaduan/1/.$form_->id')}}"></a>adukan</td>>
        			@endif
       			@endforeach
                </tbody>
           </table>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- </div> -->
<div class="footer_btm"><!-- start footer_btm -->
	<div class="container">
		<div class="row  footer1">
			<div class="col-md-5">
				<div class="soc_icons">
					<ul class="list-unstyled">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
						<div class="clearfix"></div>
					</ul>	
				</div>
			</div>
			<div class="col-md-7 copy">
				<p class="link text-right"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>