@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.absensi.kelola_absensi')
@else
    @include('home.404')
@endif
