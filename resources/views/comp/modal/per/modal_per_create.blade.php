{{-- -- Store Menggunakan Ajax -- --}}
<script>
    //-- (1) proses Create data
    $('#store').click(function(e) {
        e.preventDefault();

        //-- identifikasi variable di ajax --
        let id = $('#id').val();
        let periode = $('#periode').val();
        let total = $('#total').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //-- proses store data --
        $.ajax({
            url: `ajax_periode_store`,
            type: "POST",
            cache: false,
            data: {
                "periode": periode,
                "total": total,
                "_token": token
            },
            success: function(response) {
                //data post
                let post = `
                <div id="index_${response.data.id}"
                        class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                        <div class="d-flex align-items-start align-items-sm-center">
                            <a class="d-none d-sm-block" href="contact-details.html">
                                <div class="avatar avatar-xl avatar-3xl">
                                    <div class="avatar-name rounded-circle"><span>sd</span></div>
                                </div>
                            </a>
                            <div class="ms-1 ms-sm-3">
                                <p class="fw-semi-bold mb-3 mb-sm-2"><a href="tickets-preview.html">#${response.data.id}
                                        [{{ $res->periode }}]
                                    </a></p>
                                <div class="row align-items-center gx-0 gy-2">
                                    <div class="col-auto me-2">
                                        <h6 class="client mb-0"><a class="text-800 d-flex align-items-center gap-1"
                                                href="contact-details.html"><span class="fas fa-calendar-alt"
                                                    data-fa-transform="shrink-3 up-1"></span><span>
                                                    {{ $res->created_at->format('F Y') }}</span></a></h6>
                                    </div>
                                    <div class="col-auto lh-1 me-3">
                                        @if ($res->status == 0)
                                            <small class="badge rounded-pill bg-success"><i
                                                    class="fas fa-circle-notch"></i> Proses Terkini</small>
                                        @else
                                            @if ($res->status == 1)
                                                <small class="badge rounded-pill bg-danger"><i
                                                        class="fas fa-circle-notch"></i> Proses Validasi </small>
                                            @else
                                                @if ($res->status == 2)
                                                    <small class="badge rounded-pill bg-warning"><i
                                                            class="fas fa-check"></i> Validasi </small>
                                                @else
                                                    @if ($res->status == 3)
                                                        <small class="badge rounded-pill bg-primary"><i
                                                                class="fas fa-check-double"></i> Fixed </small>
                                                    @else
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="mb-0 text-500">30 Hari</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mt-4 mb-x1"></div>
                        <div class="d-flex justify-content-between ms-auto">
                            <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                <div
                                    style="--falcon-circle-progress-bar:@if ($res->status == 1) 100%
                                @else
                                    @if ($res->status > 1)
                                        99
                                    @else
                                        {{ $progres }} @endif
                                @endif
                                ">
                                    <svg class="circle-progress-svg" width="26" height="26"
                                        viewBox="0 0 120 120">
                                        <circle class="progress-bar-rail" cx="60" cy="60" r="54"
                                            fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                        <circle class="progress-bar-top" cx="60" cy="60" r="54"
                                            fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12">
                                        </circle>
                                    </svg>
                                </div>
                                <h6 class="mb-0 text-700">
                                    @if ($res->status == 1)
                                        100%
                                    @else
                                        @if ($res->status > 1)
                                            99%
                                        @else
                                            {{ $progres }}%
                                        @endif
                                    @endif
                                </h6>
                            </div>
                            <div>
                                <a href="{{ route('per.ca', Crypt::encryptString($res->id)) }}" id="btn-jadwal-kerja"
                                    data-bs-target="{{ $res->id }}" data-id="{{ $res->id }}"
                                    class="btn btn-link btn-dark ms-2 p-0" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Aktivasi Kalender"><span
                                        class="text-success fas fa-calendar-check"></span></a>
                                <a href="{{ route('per.i', Crypt::encryptString($res->id)) }}" id="btn-info"
                                    data-bs-target="{{ $res->id }}" data-id="{{ $res->id }}"
                                    class="btn btn-link btn-dark ms-2 p-0" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Info Kalender"><span
                                        class="text-info fas fa-info-circle"></span></a>
                                <a href="javascript:void(0)" id="btn-edit" data-bs-target="{{ $res->id }}"
                                    data-id="{{ $res->id }}" class="btn btn-link btn-dark ms-2 p-0"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Kalender"><span
                                        class="text-warning fas fa-edit"></span></a>
                                <a href="javascript:void(0)" id="btn-delete" data-bs-target="{{ $res->id }}"
                                    data-id="{{ $res->id }}" class="btn btn-link btn-dark ms-2 p-0"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Kalender"><span
                                        class="text-danger fas fa-trash"></span></a>
                            </div>
                        </div>
                    </div>
                `;

                //append to table
                $('#table-posts').prepend(post);

                //clear form
                $('#periode').val('');
                $('#total').val('');

                //close modal
                $('#modal-create').modal('hide');


            },
            error: function(error) {

                if (error.responseJSON.periode[0]) {

                    //-- tampil alert  --
                    $('#alert-periode').removeClass('d-none');
                    $('#alert-periode').addClass('d-block');

                    //-- menampilkan pesan eror --
                    $('#alert-periode').html(error.responseJSON.periode[0]);
                }

                if (error.responseJSON.total[0]) {

                    //-- tampil alert  --
                    $('#alert-total').removeClass('d-none');
                    $('#alert-total').addClass('d-block');

                    //-- menampilkan pesan eror --
                    $('#alert-total').html(error.responseJSON.total[0]);
                }

            }

        });

    });
</script>
