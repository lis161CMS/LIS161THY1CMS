<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LIS 161 CMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body{
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-image: url('https://c.pxhere.com/photos/fa/e7/norway_hovden_winter_snow_mountain_landscape_natural-661856.jpg!d');
                background-repeat: no-repeat;
                background-position: center;
                background-size: 100%;
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
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
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
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  LIS 161 CMS
                </div>
                Discover. Create. Contribute.
        </div>
    </body>
</html>
