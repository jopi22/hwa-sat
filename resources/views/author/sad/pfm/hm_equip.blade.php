@if (Auth::user()->level < 3)
    @include('asset.sad.pfm.hm_equip')
@else
    @include('home.404')
@endif
