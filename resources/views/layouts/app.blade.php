<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>Definitely not Pastebin</title>
</head>
<body id="app-layout">
    <nav class="navbar">
        <div class="wrap">
            <div class="titlediv">
                <a class="title" href="{{ url('/') }}">
                    Definitely not Pastebin
                </a>
            </div>
            <div class="logindiv">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </div>
        </div>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
