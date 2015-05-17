@extends('app')
@section('title')
    Home
@endsection
@section('navigation')
    <div class="row slider text-center">
        <div class="col-md-8">
            <div class="col-md-10 slider_text">
                <h2>Air, sumber kehidupan</h2>
                <div>Login</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/izinair/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">NIK</label>
                        <div class="col-md-6">
                            <input type="username" class="form-control" name="username" value="{{ old('username') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">Login</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="slider_img">
                <img src="{{URL::asset('images/pic1.png')}}" alt="" class="img-responsive"/>
            </div>
        </div>
    </div>
@endsection