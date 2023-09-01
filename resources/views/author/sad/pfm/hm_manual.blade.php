@if (Auth::user()->level < 3)
    @include('asset.sad.pfm.hm_manual')
@else
    @if (Auth::user()->level == 4)
        @include('asset.sad.pfm.hm_manual')
    @else
        @include('home.404')
    @endif
@endif
