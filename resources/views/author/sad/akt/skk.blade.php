@if (Auth::user()->level < 3)
    @include('asset.sad.akt.pelayanan.skk')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.akt.pelayanan.skk')
    @else
        @include('home.404')
    @endif
@endif

