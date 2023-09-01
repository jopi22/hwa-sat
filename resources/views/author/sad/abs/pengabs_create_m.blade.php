@if (Auth::user()->level < 3)
    @include('asset.sad.abs.pengabs_create_m')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.abs.pengabs_create_m')
    @else
        @include('home.404')
    @endif
@endif

