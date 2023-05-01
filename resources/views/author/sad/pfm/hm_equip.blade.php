@if (Auth::user()->level < 3)
    @include('asset.sad.pfm.hm_equip')
@else
    kosong
@endif
