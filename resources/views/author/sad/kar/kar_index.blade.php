@if (Auth::user()->level < 3)
    @include('asset.sad.kar.kar_index')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.kar.kar_index')
    @else
        @include('home.404')
    @endif
@endif
