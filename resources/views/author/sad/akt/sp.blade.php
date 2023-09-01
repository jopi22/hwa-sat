@if (Auth::user()->level < 3)
    @include('asset.sad.akt.sp.sp')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.akt.sp.sp')
    @else
        @include('home.404')
    @endif
@endif
