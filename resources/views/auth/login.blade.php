<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />



    <!-- CSS Files -->
    <link href="{{ asset('component/now-ui-kit/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('component/now-ui-kit/assets/css/now-ui-kit.css') }}" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{--<link href="{{ asset('component/now-ui-kit/assets/css/demo.css') }}" rel="stylesheet">--}}
</head>
<body class="login-page">
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url({{ asset('component/now-ui-kit/assets/img/login.jpg') }})"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="{{ asset('component/now-ui-kit/assets/img/now-logo.png')  }}">
                            </div>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                    <span class="input-group-addon">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                <input id="email"  type="text" class="form-control" placeholder="First Name..." name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                    <span class="input-group-addon">
                                        <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                    </span>
                                <input id="password" type="password" placeholder="Password..." class="form-control" name="password" required />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                                Get Started
                            </button>
                        </div>
                        <div class="footer">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="#pablo" class="link">Create Account</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#pablo" class="link">Need Help?</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://prasetia.co.id">
                                website
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="{{ asset('component/now-ui-kit/assets/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{ asset('component/now-ui-kit/assets/js/core/tether.min.js')}}"></script>
<script src="{{ asset('component/now-ui-kit/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('component/now-ui-kit/assets/js/plugins/bootstrap-switch.js')}}"></script>

<script src="{{ asset('component/now-ui-kit/assets/js/plugins/nouislider.min.js')}}"></script>
<script src="{{ asset('component/now-ui-kit/assets/js/plugins/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('component/now-ui-kit/assets/js/now-ui-kit.js')}}"></script>
</html>