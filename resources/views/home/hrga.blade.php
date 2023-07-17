@extends('layouts.layout')

@section('sad_menu')
    @if ($master == null)
        @include('layouts.panel.sad.vertikal_off')
    @else
        @if ($master->periode == $periode)
            @include('layouts.panel.sad.vertikal')
        @else
            @include('layouts.panel.sad.vertikal_off')
        @endif
    @endif
@endsection

@section('konten')

    {{-- WELCOME --}}
    <div class="row mb-3">
        <div class="col">
            <div class="card bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                    <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2"
                            src="{{ asset('assets/img/illustrations/crm-bar-chart.png') }}" alt="" width="90" />
                        <div>
                            <h6 class="text-primary fs--1 mb-0">Welcome </h6>
                            <h4 class="text-primary fw-bold mb-0">{{ Auth::user()->name }}</h4>
                        </div><img class="ms-n4 d-md-none d-lg-block"
                            src="{{ asset('assets/img/illustrations/crm-line-chart.png') }}" alt=""
                            width="150" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- KARYAWAN --}}
    <div class="card mb-3">
        <div class="card-body px-xxl-0 pt-4">
            <div class="row g-0">
                <div
                    class="col-xxl-3 col-md-6 px-3 text-center border-md-end border-bottom border-xxl-bottom-0 pb-3 p-xxl-0 ps-md-0">
                    <div class="icon-circle icon-circle-primary"><span class="fs-2 fas fa-building text-primary"></span>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"4968"}'>{{ $tot_staff }}</span><span
                            class="fw-normal text-600">Staf Kantor</span>
                    </h4>
                </div>
                <div
                    class="col-xxl-3 col-md-6 px-3 text-center border-xxl-end border-bottom border-xxl-0 pb-3 pt-4 pt-md-0 pe-md-0 p-xxl-0">
                    <div class="icon-circle icon-circle-info"><span class="fs-2 fas fa-truck-monster text-info"></span>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"324"}'>{{ $tot_rental }}</span><span
                            class="fw-normal text-600">Operator & Driver</span>
                    </h4>
                </div>
                <div
                    class="col-xxl-3 col-md-6 px-3 text-center border-md-end border-bottom border-md-bottom-0 pb-3 pt-4 p-xxl-0 pb-md-0 ps-md-0">
                    <div class="icon-circle icon-circle-success"><span class="fs-2 fas fa-toolbox text-success"></span>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"3712"}'>{{ $tot_helper }}</span><span
                            class="fw-normal text-600">Helper & Mekanik</span>
                    </h4>
                </div>
                <div class="col-xxl-3 col-md-6 px-3 text-center pt-4 p-xxl-0 pb-0 pe-md-0">
                    <div class="icon-circle icon-circle-warning"><span class="fs-2 fas fa-users text-warning"></span>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"1054"}'>0</span><span class="fw-normal text-600">General
                            Affairs</span></h4>
                </div>
            </div>
        </div>
    </div>

    {{-- PELAYANAN --}}
    {{-- <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
        <div class="col d-flex align-items-center">
            <h5 class="mb-0">Falcon</h5><button class="btn btn-sm btn-falcon-default ms-3"><span
                    class="far fa-star"></span></button>
            <div class="vertical-line vertical-line-400 position-relative h-100 mx-3"></div>
            <ul class="nav avatar-group mb-0 d-none d-md-flex">
                <li class="nav-item dropdown"></li>
                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none" href="#"
                        role="button" data-bs-toggle="dropdown">
                        <div class="avatar avatar-l">
                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-md px-0 py-3">
                        <div class="d-flex align-items-center position-relative px-3">
                            <div class="avatar avatar-2xl me-2">
                                <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0"><a class="stretched-link text-900" href="../pages/user/profile.html">Anna
                                        Karinina</a></h6>
                                <p class="mb-0 fs--2 text-500">Member</p>
                            </div>
                        </div>
                        <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a
                            class="dropdown-item text-danger" href="#!">Remove Member</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1"
                        href="#" role="button" data-bs-toggle="dropdown">
                        <div class="avatar avatar-l">
                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-md px-0 py-3">
                        <div class="d-flex align-items-center position-relative px-3">
                            <div class="avatar avatar-2xl me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0"><a class="stretched-link text-900"
                                        href="../pages/user/profile.html">Antony Hopkins</a></h6>
                                <p class="mb-0 fs--2 text-500">Member</p>
                            </div>
                        </div>
                        <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a
                            class="dropdown-item text-danger" href="#!">Remove Member</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1"
                        href="#" role="button" data-bs-toggle="dropdown">
                        <div class="avatar avatar-l">
                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-md px-0 py-3">
                        <div class="d-flex align-items-center position-relative px-3">
                            <div class="avatar avatar-2xl me-2">
                                <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0"><a class="stretched-link text-900"
                                        href="../pages/user/profile.html">Rowan Atkinson</a></h6>
                                <p class="mb-0 fs--2 text-500">Member</p>
                            </div>
                        </div>
                        <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a
                            class="dropdown-item text-danger" href="#!">Remove Member</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link p-0 dropdown-toggle dropdown-caret-none ms-n1"
                        href="#" role="button" data-bs-toggle="dropdown">
                        <div class="avatar avatar-l">
                            <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-md px-0 py-3">
                        <div class="d-flex align-items-center position-relative px-3">
                            <div class="avatar avatar-2xl me-2">
                                <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0"><a class="stretched-link text-900"
                                        href="../pages/user/profile.html">John Doe</a></h6>
                                <p class="mb-0 fs--2 text-500">Member</p>
                            </div>
                        </div>
                        <hr class="my-2" /><a class="dropdown-item" href="#!">Member Rule</a><a
                            class="dropdown-item text-danger" href="#!">Remove Member</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-caret-none p-0 ms-n1"
                        href="#" role="button" data-bs-toggle="dropdown">
                        <div class="avatar avatar-l">
                            <div class="avatar-name rounded-circle avatar-button"><span>2+</span></div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-md">
                        <h6 class="dropdown-header py-0 px-3 mb-0">Board Members</h6>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex px-3"><a class="me-2" href="../pages/user/profile.html"
                                data-bs-toggle="tooltip" title="Anna Karinina">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                                </div>
                            </a><a class="me-2" href="../pages/user/profile.html" data-bs-toggle="tooltip"
                                title="Antony Hopkins">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                                </div>
                            </a><a class="me-2" href="../pages/user/profile.html" data-bs-toggle="tooltip"
                                title="Rowan Atkinson">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                                </div>
                            </a><a class="me-2" href="../pages/user/profile.html" data-bs-toggle="tooltip"
                                title="John Doe">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                                </div>
                            </a><a class="me-2" href="../pages/user/profile.html" data-bs-toggle="tooltip"
                                title="Emily Rose">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />
                                </div>
                            </a><a href="../pages/user/profile.html" data-bs-toggle="tooltip" title="Marry Jane">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/6.jpg" alt="" />
                                </div>
                            </a></div>
                    </div>
                </li>
            </ul>
            <div class="vertical-line vertical-line-400 position-relative h-100 mx-3 d-none d-md-flex">
            </div>
            <div class="position-relative"><button
                    class="btn btn-sm btn-falcon-default dropdown-toggle dropdown-caret-none" id="invitePeople"
                    type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                        class="fas fa-plus me-2"></span>Invite </button>
                <div class="dropdown-menu dropdown-menu-end pt-2 pb-0" aria-labelledby="invitePeople"
                    style="min-width: 300px;">
                    <h6 class="dropdown-header text-center text-uppercase py-1 fs--2 ls fw-semi-bold">Invite
                        To Board</h6>
                    <div class="dropdown-divider mb-0"></div>
                    <div class="p-3">
                        <form>
                            <div class="border rounded-1 fs--2 mb-3">
                                <div class="d-flex flex-between-center border-bottom bg-200">
                                    <div class="px-2 text-700">Anyone with the link can join</div>
                                    <div class="border-start"><button
                                            class="btn btn-link btn-sm text-decoration-none hover-300 rounded-0 fs--2"
                                            id="dataCopy" type="button" data-copy="#invite-link"
                                            data-bs-placement="top" data-bs-trigger="manual" title="Copy to clipboard">
                                            <span class="far fa-copy me-2"></span>Copy link</button></div>
                                </div><input class="form-control bg-white dark__bg-dark border-0 fs--2 px-1 rounded-top-0"
                                    id="invite-link" type="text" readonly="readonly"
                                    value="https://prium.github.io/falcon/kanban/QhNCShh8TdxKx0kYN1oWzzKJDjOYUXhm9IJ035laUVdWMYsUN5" />
                            </div><input class="form-control form-control-sm" type="text"
                                placeholder="Enter name or email" /><button
                                class="btn btn-primary btn-sm d-block w-100 mt-2" type="button">Send
                                Invitation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto d-flex align-items-center"><button
                class="btn btn-sm btn-falcon-default me-2 d-none d-md-block"><span class="fas fa-plus me-2"></span>Add
                Column</button>
            <div class="dropdown font-sans-serif"><button
                    class="btn btn-sm btn-falcon-default dropdown-toggle dropdown-caret-none" type="button"
                    id="kanbanMenu" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true"
                    aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="kanbanMenu"><a
                        class="dropdown-item" href="#!">Copy link</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Settings</a><a
                        class="dropdown-item" href="#!">Themes</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove </a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="kanban-container scrollbar me-n3">
        <div class="kanban-column">
            <div class="kanban-column-header">
                <h5 class="fs-0 mb-0">Pengajuan Absensi <span class="text-info"> New({{ $pengabs_count }})</span></h5>
            </div>
            <div class="kanban-items-container scrollbar">
                @foreach ($pengabs as $asu)
                    <div class="kanban-item">
                        <a href="{{ route('peng.abs.i', Crypt::EncryptString($asu->id)) }}">
                            <div class="card kanban-item-card hover-actions-trigger">
                                <div class="card-body">
                                    <div class="position-relative">
                                    </div>
                                    <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#kanban-modal-1">
                                        {{ $asu->kar_peng_->username }} | {{ $asu->kar_peng_->name }} | Perihal :
                                        @if ($asu->status == 3)
                                            Kondisi Kesehatan
                                        @else
                                            @if ($asu->status == 5)
                                                Pengajuan Izin
                                            @else
                                                @if ($asu->status == 6)
                                                    Pengajuan Cuti
                                                @else
                                                @endif
                                            @endif
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="kanban-column-footer">
                <a href="{{ route('peng.abs.g') }}"><button
                        class="btn btn-link btn-sm d-block w-100 btn-add-card text-decoration-none text-600"
                        type="button"><span class="fas fa-list me-2"></span>Lihat Detail</button></a>
            </div>
        </div>

        <div class="kanban-column">
            <div class="kanban-column-header">
                <h5 class="fs-0 mb-0">Surat Peringatan <span class="text-500">({{ $sp_count }})</span></h5>
            </div>
            <div class="kanban-items-container scrollbar">
                @foreach ($sp as $item)
                    <div class="kanban-item">
                        <div class="card kanban-item-card hover-actions-trigger">
                            <div class="card-body">
                                <div class="position-relative">
                                </div>
                                <div class="mb-2">
                                    @if ($item->jenis == 'SP-1')
                                        <span class="badge py-1 me-1 mb-1 badge-soft-success">{{ $item->jenis }}</span>
                                    @else
                                        @if ($item->jenis == 'SP-2')
                                            <span
                                                class="badge py-1 me-1 mb-1 badge-soft-warning">{{ $item->jenis }}</span>
                                        @else
                                            @if ($item->jenis == 'SP-3')
                                                <span
                                                    class="badge py-1 me-1 mb-1 badge-soft-danger">{{ $item->jenis }}</span>
                                            @else
                                            @endif
                                        @endif
                                    @endif
                                </div>
                                <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal"
                                    data-bs-target="#kanban-modal-1">
                                    {{ $item->kar_->username }} | {{ $item->kar_->name }} No Surat : {{ $item->no }}
                                </p>
                                <div class="kanban-item-footer cursor-default">
                                    <div class="text-500 z-index-2"><span class="me-2"><span
                                                class="fas fa-calendar-alt"></span>
                                            {{ $item->created_at->format('d-m-Y') }}</span></div>
                                    <div class="z-index-2">
                                        <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip"
                                            title="{{ $item->kar_->name }}">
                                            <img class="rounded-circle" src="{{ asset($item->kar_->image) }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="kanban-column-footer">
                <a href="{{ route('sp.g') }}"><button
                        class="btn btn-link btn-sm d-block w-100 btn-add-card text-decoration-none text-600"
                        type="button"><span class="fas fa-list me-2"></span>Lihat Detail</button></a>
            </div>
        </div>


        <div class="kanban-column">
            <form action="">
                <div class="kanban-column-header">
                    <h5 class="fs-0 mb-0">Absen <span class="text-info">{{ date('l, d-m-Y') }}</span></h5>
                </div>
                <div class="kanban-items-container scrollbar">
                    <div class="kanban-item">
                        <div class="card kanban-item-card hover-actions-trigger">
                            <div class="card-body">
                                <div class="position-relative">
                                    <div class="dropdown font-sans-serif"><button
                                            class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn" type="button"
                                            data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><span class="fas fa-ellipsis-h"
                                                data-fa-transform="shrink-2"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item"
                                                href="#!">Add Card</a><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item" href="#!">Copy
                                                link</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal"
                                    data-bs-target="#kanban-modal-1">
                                    sda
                                </p>
                                <div class="kanban-item-footer cursor-default">
                                    <div class="text-500 z-index-2">

                                    </div>
                                    <div class="z-index-2">
                                        <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip"
                                            title="Emma">
                                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kanban-column-footer"><button
                        class="btn btn-success btn-sm d-block w-100 text-decoration-none text-white" type="button"><span
                            class="fas fa-save me-2"></span>Simpan Absen</button>
                </div>
            </form>
        </div>






        <div class="kanban-column">
            <div class="kanban-column-header">
                <h5 class="fs-0 mb-0">Release <span class="text-500">(5)</span></h5>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-sm btn-reveal py-0 px-2"
                        type="button" id="kanbanColumn3" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="kanbanColumn3"><a
                            class="dropdown-item" href="#!">Add Card</a><a class="dropdown-item"
                            href="#!">Edit</a><a class="dropdown-item" href="#!">Copy link</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                    </div>
                </div>
            </div>
            <div class="kanban-items-container scrollbar">
                <div class="kanban-item">
                    <div class="card kanban-item-card hover-actions-trigger">
                        <div class="position-relative rounded-top-lg overflow-hidden py-9">
                            <div class="bg-holder" style="background-image:url(../assets/img/kanban/1.jpg);"></div>
                            <!--/.bg-holder-->
                        </div>
                        <div class="card-body">
                            <div class="position-relative">
                                <div class="dropdown font-sans-serif"><button
                                        class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions"
                                        type="button" data-boundary="viewport" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"
                                            data-fa-transform="shrink-2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item"
                                            href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a
                                            class="dropdown-item" href="#!">Copy
                                            link</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal"
                                data-bs-target="#kanban-modal-2">Add a new illustration to the landing page
                                according to the contrast of the current theme </p>
                            <div class="kanban-item-footer cursor-default">
                                <div class="text-500 z-index-2"><span class="me-2" data-bs-toggle="tooltip"
                                        title="You're assigned in this card"><span class="fas fa-eye"></span></span><span
                                        class="me-2" data-bs-toggle="tooltip" title="Attachments"><span
                                            class="fas fa-paperclip me-1"></span><span>2</span></span></div>
                                <div class="z-index-2">
                                    <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Anna">
                                        <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                                    </div>
                                    <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Antony">
                                        <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                                    </div>
                                    <div class="avatar avatar-l align-top ms-n2" data-bs-toggle="tooltip" title="Emma">
                                        <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kanban-item">
                    <div class="card kanban-item-card hover-actions-trigger">
                        <div class="card-body">
                            <div class="position-relative">
                                <div class="dropdown font-sans-serif"><button
                                        class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions"
                                        type="button" data-boundary="viewport" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"
                                            data-fa-transform="shrink-2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item"
                                            href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a
                                            class="dropdown-item" href="#!">Copy
                                            link</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2"><span class="badge py-1 me-1 mb-1 badge-soft-info">Goal</span>
                            </div>
                            <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal"
                                data-bs-target="#kanban-modal-1">Design a new E-commerce, Product list, and
                                details page</p>
                        </div>
                    </div>
                </div>
                <div class="kanban-item">
                    <div class="card kanban-item-card hover-actions-trigger">
                        <div class="card-body">
                            <div class="position-relative">
                                <div class="dropdown font-sans-serif"><button
                                        class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions"
                                        type="button" data-boundary="viewport" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"
                                            data-fa-transform="shrink-2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item"
                                            href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a
                                            class="dropdown-item" href="#!">Copy
                                            link</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal"
                                data-bs-target="#kanban-modal-1">Make a weather app design which must have:
                                Local weather, Weather map and weather widgets</p>
                        </div>
                    </div>
                </div>
                <div class="kanban-item">
                    <div class="card kanban-item-card hover-actions-trigger">
                        <div class="card-body">
                            <div class="position-relative">
                                <div class="dropdown font-sans-serif"><button
                                        class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions"
                                        type="button" data-boundary="viewport" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"
                                            data-fa-transform="shrink-2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item"
                                            href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a
                                            class="dropdown-item" href="#!">Copy
                                            link</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2"><span
                                    class="badge py-1 me-1 mb-1 badge-soft-secondary">Documentation</span>
                            </div>
                            <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal"
                                data-bs-target="#kanban-modal-1">List all the Frequently Asked Questions and
                                make an FAQ section in the landing page</p>
                        </div>
                    </div>
                </div>
                <div class="kanban-item">
                    <div class="card kanban-item-card hover-actions-trigger">
                        <div class="card-body">
                            <div class="position-relative">
                                <div class="dropdown font-sans-serif"><button
                                        class="btn btn-sm btn-falcon-default kanban-item-dropdown-btn hover-actions"
                                        type="button" data-boundary="viewport" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"
                                            data-fa-transform="shrink-2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-0"><a class="dropdown-item"
                                            href="#!">Add Card</a><a class="dropdown-item" href="#!">Edit</a><a
                                            class="dropdown-item" href="#!">Copy
                                            link</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 fw-medium font-sans-serif stretched-link" data-bs-toggle="modal"
                                data-bs-target="#kanban-modal-1">Remove all the warning from dev
                                dependencies and update the packages if needed</p>
                        </div>
                    </div>
                </div>
                <form class="add-card-form mt-3">
                    <textarea class="form-control" data-input="add-card" rows="2" placeholder="Enter a title for this card..."></textarea>
                    <div class="row gx-2 mt-2">
                        <div class="col"><button class="btn btn-primary btn-sm d-block w-100"
                                type="button">Add</button></div>
                        <div class="col"><button class="btn btn-outline-secondary btn-sm d-block w-100 border-400"
                                type="button" data-btn-form="hide">Cancel</button></div>
                    </div>
                </form>
            </div>
            <div class="kanban-column-footer"><button
                    class="btn btn-link btn-sm d-block w-100 btn-add-card text-decoration-none text-600"
                    type="button"><span class="fas fa-plus me-2"></span>Add another card</button></div>
        </div>
        <div class="kanban-column">
            <div class="collapse bg-100 p-x1 rounded-lg transition-none" id="addListForm">
                <form>
                    <textarea class="form-control mb-2" data-input="add-list" rows="2" placeholder="Enter list title..."></textarea>
                    <div class="row gx-2">
                        <div class="col"><button class="btn btn-primary btn-sm d-block w-100"
                                type="button">Add</button></div>
                        <div class="col"><button class="btn btn-outline-secondary btn-sm d-block w-100 border-400"
                                type="button" data-dismiss="collapse">Cancel</button></div>
                    </div>
                </form>
            </div><button class="btn d-block w-100 btn-secondary bg-400 border-400" data-bs-toggle="collapse"
                data-bs-target="#addListForm" aria-expanded="false" aria-controls="addListForm"><span
                    class="fas fa-plus me-1"> </span>Add another list</button>
        </div>
    </div>
@endsection
