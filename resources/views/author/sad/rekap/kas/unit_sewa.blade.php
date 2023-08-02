@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.kas.unit_sewa')
@else
    @include('home.404')
@endif
