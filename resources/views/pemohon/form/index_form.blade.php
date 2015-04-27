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
		      <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::asset('images/pemkot.png')}}" style="witdh:75px; height:75px" alt="" class="img-responsive"/> </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		        <li><a href="{{URL::to('/')}}">home</a></li>
		        <li><a href="{{URL::to('pemohon/persyaratan')}}">persyaratan</a></li>
		        <li><a href="{{URL::to('pemohon/lihat')}}">daftar izin</a></li>
		        <li><a href="{{URL::to('pemohon/tentang')}}">tentang</a></li>
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
<div class="container main">
<div class="row grids_of_3">
				<div class="col-md-4 grid1_of_3">
					  <h2>izin pengelolaan air bawah tanah</h2>
					  <img src="{{URL::asset('images/icon1.png')}}" class="img-responsive"/>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				     <div class="rd_more1">
						<a href="{{URL::to('pemohon/form/new/1')}}"><button class="btn_style">view more</button></a>
					</div>					
				</div>
				<div class="col-md-4 grid1_of_3">
					<h2>izin pengambilan air permukaan</h2>
					  <img src="{{URL::asset('images/icon2.png')}}" class="img-responsive"/>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				      <div class="rd_more1">
						<a href="{{URL::to('pemohon/form/new/2')}}"><button class="btn_style">view more</button></a>
					</div>					
				</div>
				<div class="col-md-4 grid1_of_3">
					<h2>izin pembuangan air buangan ke sumber air</h2>
					  <img src="{{URL::asset('images/icon3.png')}}" class="img-responsive"/>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				     <div class="rd_more1">
						<a href="{{URL::to('pemohon/form/new/3')}}"><button class="btn_style">view more</button></a>
					</div>	
				</div>
				<div class="col-md-4 grid1_of_3">
					<h2>izin perubahan alur, bentuk, dimensi, dan kemiringan dasar saluran/sungai</h2>
					  <img src="{{URL::asset('images/icon1.png')}}" class="img-responsive"/>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				     <div class="rd_more1">
						<a href="{{URL::to('pemohon/form/new/4')}}"><button class="btn_style">view more</button></a>
					</div>	
				</div>
			    <div class="clearfix"></div>
	</div>
	</div>
</div>

</body>
</html>