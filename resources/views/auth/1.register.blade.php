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
    <link href="{{ asset('component/now-ui-kit/assets/css/demo.css') }}" rel="stylesheet">
</head>
<body class="landing-page">
    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md bg-primary fixed-top " >
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-header">Dropdown header</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">One more separated link</a>
                </div>
            </div>
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="http://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Now Ui Kit
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Register</h2>
                <p class="description">Create our employee profile</p>
                <form class="form" method="POST" action="{{ route('register') }}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-lg-6 text-center offset-lg-3 col-md-8 offset-md-2">
                            <div class="input-group form-group-no-border input-lg {{ $errors->has('name') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input id="name" type="text" class="form-control" placeholder="First Name..." name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group form-group-no-border input-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                                <input id="email" type="email" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group form-group-no-border input-lg {{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input id="password" type="password" placeholder="Password..." class="form-control" name="password" required />
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input id="password-confirm" type="password" placeholder="Password... Again" class="form-control" name="password-confirm" required />
                            </div>
                            <div class="send-button">
                                <button type="submit" class="btn btn-primary btn-round btn-block btn-lg">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
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