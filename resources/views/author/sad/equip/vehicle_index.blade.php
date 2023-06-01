@if (Auth::user()->level < 3)
    @include('asset.sad.equip.vehicle_index')
@else
    @include('home.404')
@endif
