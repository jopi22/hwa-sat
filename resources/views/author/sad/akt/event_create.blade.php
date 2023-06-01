@if (Auth::user()->level < 3)
    @include('asset.sad.akt.event.event_create')
@else
    @include('home.404')
@endif
