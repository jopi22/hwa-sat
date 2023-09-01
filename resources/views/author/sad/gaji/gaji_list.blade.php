@if (Auth::user()->level < 3)
    @include('asset.sad.gaji.gaji_list')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.gaji.gaji_list')
    @else
        @include('home.404')
    @endif
@endif

