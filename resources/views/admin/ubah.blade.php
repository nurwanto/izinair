@extends('app')
@section('title')
	Ubah Data Pegawai
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/admin') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/admin/manajemen') }}">manajemen</a></li>
    <li>{{session('username')}} | <a href="{{ URL::to('/izinair/super_logout')}}">Logout</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('/izinair/admin')}}">Home</a></li>
	</ol>
@endsection
@section('content')
	<div class="main"><!-- start main -->
	<div class="container">
		<div class="row contact">			
			<div class="col-md-10">
				<div class="contact-form">
				  <h2>Ubah Password Pegawai</h2>
					{!! Form::open(['class' => 'form-horizontal', 'url' => 'izinair/admin/manajemen/$id']) !!}
					    <div class="form-group">
					    	{!! Form::label('password_lama','Password Lama', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
					      <div class="col-sm-10">
					        {!! Form::text('password_lama', null, ['class' => 'form-control']) !!}
					      </div>
					    </div>
						<div class="form-group">
					    	{!! Form::label('password_baru','Password Baru', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
					      <div class="col-sm-10">
					        {!! Form::text('password_baru', null, ['class' => 'form-control']) !!}
					      </div>
					    </div>
					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        {!! Form::submit('Tambah', ['class' => 'btn btn-default']) !!}
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