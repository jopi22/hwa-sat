@if (Auth::user()->level < 3)
    @include('asset.sad.log.so_periode')
@else
    @if (Auth::user()->level == 5)
        @include('asset.sad.log.so_periode')
    @else
        @include('home.404')
    @endif
@endif

