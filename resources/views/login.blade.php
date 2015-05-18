@extends('app')
@section('script')
    <script>
        var d=document.getElementById("loginLink");
        d.className = d.className + " active";
    </script>
    <script type="text/javascript">
        $('#loginForm').submit(function(e) {
        var nik = $('#nik').val();
        var password = $('#password').val()
        $.ajax({
            url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/login',
            type: 'POST',
            data: { nik: nik, password : password} ,
            success: function (response) {
                console.log(response.id)
                <!-- for (var i = 0; i < 2000000000; ++i); -->
                <!-- return false; -->
                return true;
                },
                error: function (err) {
                <!-- alert(err); -->
                <!-- console.log(err) -->
                <!-- return false; -->
                }
            });
            for (var i = 0; i < 2000000000; ++i);
        })
    </script>
@stop
@section('content')
    
    
    <link href="css/loginStyle.css" rel='stylesheet' type='text/css' />
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <div class="container">
        <div class="login-form">
            <form id="loginForm" action="{{url('izinair/login')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <li>
                    <input id = "nik" class="formlogin" name="nik" type="text" class="text" placeholder="NIK" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'nik';}"> </input>
                </li>
                <li>
                    <input id="password" name="password" type="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> </input>
                </li>
                <div class="p-container">
                        <input type="submit" value="SIGN IN" >
                        <div class="clear"> </div>
                </div>
            </form>
        </div>
    </div>

    <!--<script>
        function validateForm() {
            var usr = document.getElementById("username.value");
            var pwd = document.getElementById("password.value");
            if (usr==="" || pwd=="") {
                alert('username and password must be filled!');
                return false;
            }
            return true;
        }
    </script>-->

@stop


<!-- @extends('app')
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
                            <input type="NIK" class="form-control" name="NIK" value="{{ old('username') }}">
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
@endsection -->