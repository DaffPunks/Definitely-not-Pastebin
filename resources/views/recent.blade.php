@if(Auth::check())
    Your recent 10
    @foreach($pastenames as $names)
        <Br> {{  $names->name  }}
    @endforeach
@else
    Recent 10
    @foreach($pastenames as $names)
        <Br> {{  $names->name  }}
    @endforeach
@endif