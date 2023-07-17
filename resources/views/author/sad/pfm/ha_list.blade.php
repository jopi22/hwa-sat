@if (Auth::user()->level < 3)
    @include('asset.sad.pfm.ha_list')
@else
    @if (Auth::user()->level == 4)
        @include('asset.sad.pfm.ha_list')
    @else
        @include('home.404')
    @endif
@endif
