<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('backend/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/main-style.css')}}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{asset('backend/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</h3>
                    </div>
                    <div class="panel-body">
                                @isset($url)
                                <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                                    @else
                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @endisset
                        @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
     <script src="{{asset('backend/plugins/jquery-1.10.2.js')}}"></script>
     <script src="{{asset('backend/plugins/bootstrap/bootstrap.min.js')}}"></script>
     <script src="{{asset('backend/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
     <script src="{{asset('backend/plugins/pace/pace.js')}}"></script>
     <script src="{{asset('backend/scripts/siminta.js')}}"></script>
</body>

</html>
