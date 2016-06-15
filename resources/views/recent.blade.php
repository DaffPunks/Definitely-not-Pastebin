@if(Auth::check())
    <h2>Your recent 10</h2>
@else
    <h2>Recent 10</h2>
@endif
    @foreach($pastenames as $names)
        <div class="recentlink">
            <a href="{{url('/' . $names->id)}}">{{  $names->name  }}</a>
        </div>
    @endforeach
