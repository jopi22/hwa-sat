@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.kas.cat_list')
@else
@include('home.404')
@endif
