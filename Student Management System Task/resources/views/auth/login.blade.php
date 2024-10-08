<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Bayt SM-System - Responsive Admin & Dashboard </title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
        <link href="{{ asset('plugins/material/css/materialdesignicons.min.css') }}" rel=" stylesheet" />
        <link href="{{ asset('plugins/simplebar/simplebar.css" rel="stylesheet') }}" />

        <!-- PLUGINS CSS STYLE -->
        <link href=" {{ asset('plugins/nprogress/nprogress.css" rel="stylesheet') }}" />

        <!-- MONO CSS -->
        <link id="main-css-href" rel="stylesheet" href="{{ asset('css/style.css') }}" />




        <!-- FAVICON -->
        {{-- <link href="{{ asset('images/logo.png" rel="shortcut icon') }}" /> --}}
        <link href="{{ asset('images/favicon.png" rel="shortcut icon') }}" />

        <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
  <![endif]-->
        <script src="{{ asset('plugins/nprogress/nprogress.js') }}"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="card card-default mb-0">
                        <div class="card-header pb-0">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                                <a class="w-auto pl-0" href="/index.html">
                                    <img src="images/logo.gif" alt="Mono">
                                    <br>
                                    <span class="brand-name text-dark">Bayt SM-System</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-5 pb-5 pt-0">

                            <h4 class="text-dark mb-6 text-center">Sign in </h4>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" class="form-control input-lg" id="email"
                                            aria-describedby="emailHelp" placeholder="Email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username">

                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control input-lg" id="password"
                                            placeholder="Password" name="password" required
                                            autocomplete="current-password">
                                    </div>
                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mb-3">

                                            <div class="custom-control custom-checkbox mr-3 mb-3">
                                                <!-- <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                                </label> -->
                                                <input id="remember_me" name="remember" type="checkbox"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="remember_me">Remember
                                                    me</label>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a class="text-color" href="{{ route('password.request') }}"> Forgot
                                                    password? </a>
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-pill mb-4">Sign In</button>

                                        <p>Don't have an account yet ?
                                            <a class="text-blue" href="{{ route('register') }}">Sign Up</a>
                                        </p>
                                        <sub>For testing purposes only
                                            <a class="text-blue" href="{{ route('admin.login') }}">Super Admin
                                                Login</a>
                                        </sub>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
