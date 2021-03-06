@extends('layouts.app')

@section('content')
    <div class="main">
        <form method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div>
                Email
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Password
                <input type="password" name="password" id="password">
            </div>

            <div>
                <label for="remember">Remember Me</label>
                <input id="remember" type="checkbox" name="remember">
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
@endsection