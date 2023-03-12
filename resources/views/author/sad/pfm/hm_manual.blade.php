@if (Auth::user()->level < 3)
    @include('asset.sad.pfm.hm_manual')
@else
    kosong
@endif
