@foreach ($perform_list as $mod)
    <div class="modal fade" id="info-pfm-{{ $mod->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body p-0">
                    <div class="bg-primary rounded-top-lg py-3 ps-4 pe-6">
                        <h4 class="mb-1" id="staticBackdropLabel">Id HM: {{ $mod->id }}</h4>
                        <p class="fs--2 mb-0">Tanggal: {{ $mod->tgl }}, {{ $mod->shift_->shift }}</p>
                    </div>
                    <div class="p-4">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i
                                            class="fas fa-circle fa-stack-2x text-200"></i><i
                                            class="fa-inverse fa-stack-1x text-primary fas fa-truck-monster"
                                            data-fa-transform="shrink-2"></i></span>
                                    <div class="flex-1">
                                        <h5 class="mb-2 text-primary fs-0">Equipment</h5>
                                        <div class="d-flex">
                                            <span class="badge me-1 py-2 bg-100 text-1000">No Unit:
                                                {{ $mod->equip_->no_unit }}</span>
                                            <span class="badge me-1 py-2 bg-100 text-1000">Kode Unit:
                                                {{ $mod->equip_->kode_unit }}</span>
                                            <span class="badge me-1 py-2 bg-100 text-1000">Tipe:
                                                {{ $mod->equip_->tipe }}</span>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i
                                            class="fas fa-circle fa-stack-2x text-200"></i><i
                                            class="fa-inverse fa-stack-1x text-primary fas fa-users"
                                            data-fa-transform="shrink-2"></i></span>
                                    <div class="flex-1">
                                        <h5 class="mb-2 text-primary fs-0">Operator / Driver</h5>
                                        <div class="d-flex">
                                            <span class="badge me-1 py-2 bg-100 text-1000">Id:
                                                {{ $mod->kar_->tgl_gabung->format('ym') }}{{ $mod->kar_->id }}</span>
                                            <span class="badge me-1 py-2 bg-100 text-1000">Nama:
                                                {{ $mod->kar_->name }}</span>
                                            <span class="badge me-1 py-2 bg-100 text-1000">Jabatan:
                                                {{ $mod->kar_->jabatan }}</span>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i
                                            class="fas fa-circle fa-stack-2x text-200"></i><i
                                            class="fa-inverse fa-stack-1x text-primary fas fa-align-left"
                                            data-fa-transform="shrink-2"></i></span>
                                    <div class="flex-1">
                                        <h5 class="mb-2 text-primary fs-0">Dedicated</h5>
                                        <div class="d-flex">
                                            <h6 class="fs--1">
                                                @if ($mod->dedicated_id)
                                                    {{ $mod->dedicated_->dedicated }}
                                                @else
                                                    -
                                                @endif
                                            </h6>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i
                                            class="fas fa-circle fa-stack-2x text-200"></i><i
                                            class="fa-inverse fa-stack-1x text-primary fas fa-map-marked-alt"
                                            data-fa-transform="shrink-2"></i></span>
                                    <div class="flex-1">
                                        <h5 class="mb-2 text-primary fs-0">Lokasi</h5>
                                        <div class="d-flex">
                                            <h6 class="fs--1">
                                                @if ($mod->lokasi_id)
                                                    {{ $mod->lokasi_->lokasi }}
                                                @else
                                                    -
                                                @endif
                                            </h6>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i
                                            class="fas fa-circle fa-stack-2x text-200"></i><i
                                            class="fa-inverse fa-stack-1x text-primary fas fa-info"
                                            data-fa-transform="shrink-2"></i></span>
                                    <div class="flex-1">
                                        <h5 class="mb-2 text-primary fs-0">Remark</h5>
                                        <div class="d-flex">
                                            <h6 class="fs--1">
                                                @if ($mod->remark)
                                                    {{ $mod->remark }}
                                                @else
                                                    -
                                                @endif
                                            </h6>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <ul class="nav flex-lg-column fs--1">
                                    <li class="nav-item me-2 me-lg-0">
                                        <label>HM Awal</label>
                                        <a class="nav-link nav-link-card-details">
                                            {{ $mod->hm_awal }}
                                        </a>
                                    </li>
                                    <li class="nav-item me-2 me-lg-0">
                                        <label>HM Akhir</label>
                                        <a class="nav-link nav-link-card-details">
                                            {{ $mod->hm_akhir }}
                                        </a>
                                    </li>
                                    <li class="nav-item me-2 me-lg-0">
                                        <label>HM Potongan</label>
                                        <a class="nav-link nav-link-card-details">
                                            {{ $mod->hm_pot }}
                                        </a>
                                    </li>
                                    <li class="nav-item me-2 me-lg-0">
                                        <label>HM Total</label>
                                        <a class="nav-link bg-200 nav-link-card-details">
                                            {{ $mod->hm_total }}
                                        </a>
                                    </li>
                                    <li class="nav-item me-2 me-lg-0">
                                        <label>Jam Awal</label>
                                        <a class="nav-link nav-link-card-details">
                                            {{ $mod->jam_awal }}
                                        </a>
                                    </li>
                                    <li class="nav-item me-2 me-lg-0">
                                        <label>Jam Akhir</label>
                                        <a class="nav-link nav-link-card-details">
                                            {{ $mod->jam_akhir }}
                                        </a>
                                    </li>
                                    <li class="nav-item me-2 me-lg-0">
                                        <label>Jam Potongan</label>
                                        <a class="nav-link nav-link-card-details">
                                            {{ $mod->jam_pot }}
                                        </a>
                                    </li>
                                    <li class="nav-item me-2 me-lg-0">
                                        <label>Jam Total</label>
                                        <a class="nav-link nav-link-card-details">
                                            {{ $mod->jam_total }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
