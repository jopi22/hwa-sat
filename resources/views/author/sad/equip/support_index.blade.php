@if (Auth::user()->level < 3)
    @include('asset.sad.equip.support_index')
@else
    kosong
@endif
