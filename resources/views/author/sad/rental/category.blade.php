@if (Auth::user()->level < 3)
    @include('asset.sad.rental.category')
@else
    @if (Auth::user()->level < 4)
        @include('asset.sad.rental.category')
    @else
        @include('home.404')
    @endif
@endif
