@if (Auth::user()->level < 3)
    @include('asset.sad.equip.vehicle_create')
@else
    kosong
@endif
