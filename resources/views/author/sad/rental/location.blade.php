@if (Auth::user()->level < 3)
    @include('asset.sad.rental.location')
@else
    @include('home.404')
@endif
