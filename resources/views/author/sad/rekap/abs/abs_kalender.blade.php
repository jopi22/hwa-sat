@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.absensi.abs_kalender')
@else
    @include('home.404')
@endif
