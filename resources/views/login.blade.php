@extends('app')
@section('script')
    <script>
        var d=document.getElementById("loginLink");
        d.className = d.className + " active";
    </script>
@ensection
@section('content')
    <div class="container">
        <div class="login-form">
            <form class="form-horizontal" role="form" action="{{url('izinair/login')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <li>
                    <input id = "nik" name="nik" type="text" class="text" placeholder="NIK" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'nik';}"> </input>
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


<script type="text/javascript">
    $(document).ready(function(){
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
        });
    });
    </script>

@stop