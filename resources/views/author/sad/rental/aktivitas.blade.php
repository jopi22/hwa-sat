@if (Auth::user()->level < 3)
    @include('asset.sad.rental.aktivitas')
@else
    @if (Auth::user()->level == 4)
        @include('asset.sad.rental.aktivitas')
    @else
        @include('home.404')
    @endif
@endif
