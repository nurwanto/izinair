@extends('app')
@section('title')
	Login
@endsection
@section('content')
	<div class="main"><!-- start main -->
	<div class="container">
		<div class="row contact">
			<div class="col-md-8">
			  <div class="contact-form">
			  	<h2>Login</h2>

					{!! Form::open(['class' => 'form-horizontal', 'url' => 'izinair/pemohon/daftarizin/1']) !!}
					  	
					    	<div class="form-group">
						    	{!! Form::label('username','Username', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::text('username') !!}
						      </div>
						    </div>
    						<div class="form-group">
						    	{!! Form::label('password','Password', ['class' => 'control-label col-sm-2', 'style' => 'font-size:14px']) !!}
						      <div class="col-sm-10">
						        {!! Form::password('password', null, ['class' => 'form-control', 'type' => 'password']) !!}
						      </div>
						    </div>
						    <div class="form-group">        
						      <div class="col-sm-offset-2 col-sm-10">
						        {!! Form::submit('Login', ['class' => 'btn btn-default']) !!}
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