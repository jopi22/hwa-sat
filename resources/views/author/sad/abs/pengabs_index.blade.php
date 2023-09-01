@if (Auth::user()->level < 3)
    @include('asset.sad.abs.pengabs_index')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.abs.pengabs_index')
    @else
        @include('home.404')
    @endif
@endif
