@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.kas.cat_create')
@else
@include('home.404')
@endif
