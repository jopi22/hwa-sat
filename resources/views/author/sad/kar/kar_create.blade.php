@if (Auth::user()->level < 3)
    @include('asset.sad.kar.kar_create')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.kar.kar_create')
    @else
        @include('home.404')
    @endif
@endif
