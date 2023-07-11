@if (Auth::user()->level < 3)
    @include('asset.sad.rental.category')
@else
    @include('home.404')
@endif
