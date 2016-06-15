@extends('layouts.app')

@section('content')

    <div class="pastefield">
        <div class="wrap">
            @include('paste')
        </div>
    </div>
    <div class="recent">
        <div class="wrap">
            <div class="main">
                <div class="somepaste rec-title">
                    @include('recent', ['pastenames' => $pastenames])
                </div>
            </div>
        </div>
    </div>

@stop