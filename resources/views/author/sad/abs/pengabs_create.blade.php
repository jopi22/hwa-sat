@if (Auth::user()->level < 3)
    @include('asset.sad.abs.pengabs_create')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.abs.pengabs_create')
    @else
        @include('home.404')
    @endif
@endif
