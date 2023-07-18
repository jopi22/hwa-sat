@if (Auth::user()->level < 3)
    @include('asset.sad.rental.dedicated')
@else
    @if (Auth::user()->level == 4)
        @include('asset.sad.rental.dedicated')
    @else
        @include('home.404')
    @endif
@endif
