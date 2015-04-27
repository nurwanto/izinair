<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Form Baru | Izin Air PemKot Bandung</title>
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
		      <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::asset('images/pemkot.jpg')}}" style="width:75px; height:75px" alt="" class="img-responsive"/> </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		        <li><a href="{{URL::to('/')}}">home</a></li>
		        <li><a href="{{URL::to('pemohon/persyaratan')}}">persyaratan</a></li>
		        <li><a href="{{URL::to('pemohon/lihat')}}">daftar izin</a></li>
		        <li><a href="{{URL::to('pemohon/tentang')}}">tentang</a></li>
		        <li><a href="{{URL::to('pemohon/kontak')}}">kontak kami</a></li>
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
		  <li><a href="{{URL::to('/')}}">Home</a></li>
		  <li class="active">Form</li>
		</ol>
	</div>
</div>
<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact">			
				<div class="col-md-10">
				  <div class="contact-form">
				  	<h2>Data Pemohon</h2>
					    <form class="form-horizontal" role="form">

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="ktp" style="font-size:14px">KTP</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="ktp">
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="telp" style="font-size:14px">No Telp/ No HP</label>
						      <div class="col-sm-10">
						        <input type="text" class="form-control" id="telp">
						      </div>
						    </div>

							<div class="form-group">
							    <label class="control-label col-sm-2" for="email" style="font-size:14px">Email Pemohon</label>
							    <div class="col-sm-10">
							      <input type="email" class="form-control" id="email">
							    </div>
							</div>

							<h2>Data Izin</h2>

							<div class="form-group">
						      <label class="control-label col-sm-2" for="akta" style="font-size:14px">Akta Pendirian Perusahaan</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="akta">
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="imb" style="font-size:14px">IMB</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="imb">
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="surat" style="font-size:14px">Surat Tanah</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="surat">
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="domisili" style="font-size:14px">Keterangan Domisili</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="domisili">dari lurah/camat setempat
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="keberatan" style="font-size:14px">Pernyataan tidak keberatan</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="keberatan">dari masyarakat sekitar proyek
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="pelestarian" style="font-size:14px">Pernyataan Pelestarian Alam</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="pelestarian">
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="pbb" style="font-size:14px">Pelunasan PBB</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="pbb">PBB tahun akhir
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-2" for="profil" style="font-size:14px">Profil</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="profil">Profil memanjang dan melintang dari saluran baru
						      </div>
						    </div>

						  	<div class="form-group">
						      <label class="control-label col-sm-2" for="berita" style="font-size:14px">Berita Acara</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="berita">Serah terima lahan saluran lama dan baru 
						      </div>
						    </div>

						  	<div class="form-group">
						      <label class="control-label col-sm-2" for="dbmp" style="font-size:14px">Rekomendasi dari DBMP</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="dbmp">
						      </div>
						    </div>

							<div class="form-group">
						      <label class="control-label col-sm-2" for="lurah" style="font-size:14px">Rekomendasi dari Lurah/Camat</label>
						      <div class="col-sm-10">
						        <input type="file" class="form-control" id="lurah"> 
						      </div>
						    </div>
    					</div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-default">Submit</button>
			      </div>
			    </div>
			</form>
		</div>
  		</div>		
  	<div class="clearfix"></div>		
</div> <!-- end contact -->
</div>
</div>
<div class="footer_bg"><!-- start footre -->
	<div class="container">
		<div class="row  footer">
			<div class="col-md-3 span1_of_4">
				<h4>about us</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry .....</p>
				<h5>Address</h5>
				<p class="top">500 Lorem Ipsum Dolor Sit,</p>
				<p>22-56-2-9 Sit Amet,</p>
				<p>USA</p>
				<p>Phone:(00) 222 666 444</p>
				<p>Fax: (000) 000 00 00 0</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
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