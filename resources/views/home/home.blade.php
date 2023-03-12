@if (Auth::user()->level == 1)
    @include('home.developer')
@else
    @if (Auth::user()->level == 2)
        @include('home.superadmin')
    @else
        @if (Auth::user()->level == 3)
            @include('home.admin')
        @else
            @if (Auth::user()->level == 4)
                @include('home.pekerja')
            @else
                kosong
            @endif
            kosong
        @endif
        kosong
    @endif
    kosong
@endif
