@if (Auth::user()->level < 3)
    @include('asset.sad.equip.support_create')
@else
    kosong
@endif
