@extends('app')
@section('title')
	Data Teknis
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pegawai') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pegawai/daftarizin') }}">daftar izin</a></li>
    <li>{{session('username')}} | <a href="#">Logout</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pegawai')}}">Home</a></li>
	  <li class="active">Data Teknis</li>
	</ol>
@endsection
@section('content')
	<div class="main"><!-- start main -->
	<div class="container">
		<div class="row contact">			
			<div class="col-md-10">
				<div class="contact-form">
					<h2>Data Teknis Izin Air</h2>
					{!! Form::open(['class' => 'form-horizontal', 'url' => 'izinair/pegawai/daftarizin/datateknis']) !!}
					        {!! Form::hidden('id_izin', $id, ['class' => 'form-control']) !!}
					        {!! Form::hidden('jenis_izin', $jenis, ['class' => 'form-control']) !!}
					    <div class="form-group">
					    	{!! Form::label('data','Data Teknis', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
					      <div class="col-sm-10">
					        {!! Form::textarea('data', null, ['class' => 'form-control']) !!}
					      </div>
					    </div>

					    <div class="form-group">
					    	{!! Form::label('status','Status', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
					      <div class="col-sm-10">
					        {!! Form::select('status', array('diterima' => 'diterima', 'ditolak' => 'ditolak')) !!}
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