@if (Auth::user()->level < 3)
    @include('asset.sad.equip.vehicle_index')
@else
    kosong
@endif
