@if (Auth::user()->level < 3)
    @include('asset.sad.equip.support_create')
@else
    @include('home.404')
@endif
