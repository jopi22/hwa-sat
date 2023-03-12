@if (Auth::user()->level < 3)
    @include('asset.sad.kar.bank_index')
@else
    kosong
@endif
