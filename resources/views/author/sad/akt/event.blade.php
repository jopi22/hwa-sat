@if (Auth::user()->level < 3)
    @include('asset.sad.akt.event.event')
@else
    @include('home.404')
@endif
