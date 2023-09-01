@if (Auth::user()->level < 3)
    @include('asset.sad.akt.resign.resign')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.akt.resign.resign')
    @else
        @include('home.404')
    @endif
@endif

