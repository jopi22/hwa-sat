@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger border-2 d-flex align-items-center" role="alert">
            <div class="bg-danger me-3 icon-item"><span class="fas fa-times-circle text-white fs-3"></span>
            </div>
            <p class="mb-0 flex-1">{{ $error }}</p>
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endforeach
@endif

@if (Session::has('success'))
    <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
        <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span>
        </div>
        <p class="mb-0 flex-1"> {{ Session('success') }} </p>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif
