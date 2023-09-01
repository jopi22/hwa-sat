@if (Auth::user()->level < 3)
    @include('asset.sad.equip.support_index')
@else
    @if (Auth::user()->level == 4)
        @include('asset.sad.equip.support_index')
    @else
        @include('home.404')
    @endif
@endif
