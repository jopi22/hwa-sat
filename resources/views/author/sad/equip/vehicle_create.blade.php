@if (Auth::user()->level < 3)
    @include('asset.sad.equip.vehicle_create')
@else
    @if (Auth::user()->level == 4)
        @include('asset.sad.equip.vehicle_create')
    @else
        @include('home.404')
    @endif
@endif
