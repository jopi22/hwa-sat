<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>

    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="{{ route('dash') }}">
            <div class="d-flex align-middle py-3">
                <img class="me-2" src="{{ asset('assets/img/logos/hubstaff.png') }}" alt="" width="35"
                    height="35" />
                <span class="font-sans-serif">HWA SAT</span>
            </div>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">


                @if (Auth::user()->level == 2)
                    @include('layouts.sidebar.sidebar_off_sad')
                @endif
                @if (Auth::user()->level == 3)
                    @include('layouts.sidebar.sidebar_off_hrga')
                @endif
                @if (Auth::user()->level == 4)
                    @include('layouts.sidebar.sidebar_off_rental')
                @endif
                @if (Auth::user()->level == 5)
                    @include('layouts.sidebar.sidebar_off_log')
                @endif

            </ul>
        </div>
    </div>
</nav>
