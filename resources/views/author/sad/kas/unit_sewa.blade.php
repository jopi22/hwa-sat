@if (Auth::user()->level < 3)
    @include('asset.sad.kas.unit_sewa')
@else
    @include('home.404')
@endif
