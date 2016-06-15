@extends('layouts.app')

@section('content')

    @foreach($pastes as $paste)
    <div class="wrap main">
        <h2 class="titlepaste">{{ $paste->name }}</h2>
        <textarea type="text" name="text" id="text-field" rows="10" placeholder="">{{ $paste->text }}</textarea>
    </div>
    @endforeach
@stop