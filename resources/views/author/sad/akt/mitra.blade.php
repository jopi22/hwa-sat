@if (Auth::user()->level < 3)
    @include('asset.sad.akt.mitra.mitra')
@else
    @include('home.404')
@endif
