@if (Auth::user()->level < 3)
    @include('asset.sad.abs.abs_kalender')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.abs.abs_kalender')
    @else
        @include('home.404')
    @endif
@endif
