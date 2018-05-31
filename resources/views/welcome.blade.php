<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LIS 161 CMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">


        <!-- Styles -->
        <style>
            html {
                height: 100vh;
                margin: 0;
                background-image: url('https://farm5.static.flickr.com/4023/4412224015_dbe31a4ae4_b.jpg');
                background-repeat: no-repeat;
                background-position: 60% 50%;
                background-size: cover;
              }
            body {
              color: #ffffff;
              font-family: 'Raleway', sans-serif;
              font-weight: 100;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                padding-left: 200px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-top: 200px;
            }

            .sidenav {
                font-size: 18px;
                font-family: 'Josefin Sans', sans-serif;
                height: 100%;
                width: 190px;
                position: fixed;
                z-index: 1;
                top: 0px;
                left: 10px;
                background:#f6f6f6;
                overflow-x: hidden;
                padding: 120px 0;
                border-right-style: solid;
                border-color: #e3e3e3;
                border-width: 1px;
            }
            .sidenav a,p {
                padding: 10px 10px 0px 20px;
                text-decoration: none;
                font-size: 20px;
                color: 	#740404;
                display: block;
            }

            .sidenav a:hover {
                color: #0c6509;
            }
            .co {
              color: #636b6f;
            }
        </style>
    </head>
    <body>
        <div class="sidenav">
            @if (Route::has('login'))
                    @auth
                        @if(Auth::check() && Auth::user()->role_id == 1)
                            <a href="{{ url('/users') }}">{{ __('User Management') }}</a>
                            <a href="{{ url('/permissions') }}">{{ __('Permissions') }}</a>
                            <a href="{{ url('/navigation/create') }}">{{ __('Edit User Navigation') }}</a>
        	                      <a href="{{ url('/adminhome') }}">Home</a>
                        @else
                            @php
                                $navs = DB::table('navigations')->where('navactivated',1)->get();
                            @endphp

                            @foreach($navs as $nav)
                              {{ link_to_route($nav->navigationLink, $nav->navigationName, null,['class' => 'nav-link']) }}
                            @endforeach
                        @endif

                    @else
                        <p>Welcome to LIS 161 CMS!</p><br>
                        <a href="{{ route('login') }}">Log-in</a><div class="co">&emsp;to your account <br>
                        <br>&emsp;or</div> <br>
                        <a href="{{ route('register') }}">Register</a><div class="co">&emsp;for a new account</div>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  LIS 161 CMS
                </div>
                  <h3>Create. Discover. Change.</h3>
        </div>
    </body>
</html>
