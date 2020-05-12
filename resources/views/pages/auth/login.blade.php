<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rekap Surat | Sign In</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('assets/plugins/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('assets/plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo" >
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <img height="80px" src="{{ url('assets/images/logo_pcc.png') }}" alt="logo_pcc.png" srcset="" >
                </div>
                <div class="col-md-9 col-xs-12">
                    <p style="font-size:28.5px;"><b>Aplikasi Rekap Surat</b></p>
                    <p style="font-size:19.9px;">UKM Polytechnic Computer Club</p>
                </div>
            </div>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign In</p>

            <form action="{{ route('login') }}" method="post" autocomplete="off">
                @csrf
                <div class="form-group has-feedback @error('username') has-error @enderror">
                    <input type="text" name="username" value="{{ old('username') }}" class="form-control" placeholder="Username" autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @error('username')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group has-feedback @error('password') has-error @enderror">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" name="sign_in" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="{{ url('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ url('assets/plugins/iCheck/icheck.min.js') }}"></script>
    <!-- Additional Script -->
    <script>
       
    </script>
</body>
</html>
