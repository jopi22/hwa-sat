@if (Auth::user()->level < 3)
    @include('asset.sad.rental.location')
@else
    @if (Auth::user()->level == 4)
        @include('asset.sad.rental.location')
    @else
        @include('home.404')
    @endif
@endif
