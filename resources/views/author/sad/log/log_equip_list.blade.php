@if (Auth::user()->level < 3)
    @include('asset.sad.log.log_equip_list')
@else
    kosong
@endif
