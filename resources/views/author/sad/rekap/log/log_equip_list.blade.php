@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.log.log_equip_list')
@else
@include('home.404')
@endif
