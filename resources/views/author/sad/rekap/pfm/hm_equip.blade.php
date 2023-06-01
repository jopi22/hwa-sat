@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.performa.hm_equip')
@else
@include('home.404')
@endif
