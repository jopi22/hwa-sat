@if (Auth::user()->level < 3)
    @include('asset.sad.abs.kelola_absensi')
@else
    @if (Auth::user()->level == 3)
        @include('asset.sad.abs.kelola_absensi')
    @else
        @include('home.404')
    @endif
@endif
