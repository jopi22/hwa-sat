@extends('layouts.layout_horizontal')

@section('judul')
    Jadwal Saya | HWA &bull; SAT
@endsection

@section('konten')
    <div class="col-12 order-xxl-3">
        <div class="card" id="runningProjectTable" data-list='{"valueNames":["projects","worked","time","date"]}'>
            <div class="card-header">
                <h6 class="mb-0">Running Projects</h6>
            </div>
            <div class="card-body p-0">
                <div class="scrollbar">
                    <table class="table mb-0 table-borderless fs--2 border-200 overflow-hidden table-running-project">
                        <thead class="bg-light">
                            <tr class="text-800">
                                <th class="sort" data-sort="projects">Projects</th>
                                <th class="sort" data-sort="time">Progress</th>
                                <th class="sort text-center" data-sort="worked"> Worked</th>
                                <th class="sort text-center" data-sort="date">Due Date</th>
                                <th class="text-end">Members</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div class="avatar-name rounded-circle text-primary bg-soft-primary fs-0">
                                                <span>C</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">CRM dashboard design</a></h6>
                                            <p class="text-500 fs--2 mb-0">Falcon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar"
                                            style="width: 50%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">12h:50m:00s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">01/02/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/1-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/2-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <div class="avatar-name rounded-circle "><span>+2</span></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div class="avatar-name rounded-circle text-success bg-soft-success fs-0">
                                                <span>U</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">UI/UX Redesign</a></h6>
                                            <p class="text-500 fs--2 mb-0">Themewagon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar"
                                            style="width: 70%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">11h:50m:00s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">04/02/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/3-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/4-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <div class="avatar-name rounded-circle "><span>+5</span></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div class="avatar-name rounded-circle text-info bg-soft-info fs-0">
                                                <span>F</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">F.A.Q Section</a></h6>
                                            <p class="text-500 fs--2 mb-0">Mailbluster</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar"
                                            style="width: 60%" aria-valuenow="43.72" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">3h:30m:50s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">01/02/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/5-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div class="avatar-name rounded-circle text-warning bg-soft-warning fs-0">
                                                <span>D</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Drip Campaign Feature</a></h6>
                                            <p class="text-500 fs--2 mb-0">Themewagon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar"
                                            style="width: 80%" aria-valuenow="43.72" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">12h:20m:00s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">22/03/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <div class="avatar-name rounded-circle "><span>+2</span></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div class="avatar-name rounded-circle text-danger bg-soft-danger fs-0">
                                                <span>S</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Studio Recording</a></h6>
                                            <p class="text-500 fs--2 mb-0">Mailbluster Marketing</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar"
                                            style="width: 40%" aria-valuenow="43.72" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">11h:10m:00s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">28/02/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div class="avatar-name rounded-circle text-success bg-soft-success fs-0">
                                                <span>P</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Project Managenemt</a></h6>
                                            <p class="text-500 fs--2 mb-0">Themewagon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar"
                                            style="width: 50%" aria-valuenow="43.72" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">12h:30m:30s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">08/01/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/16.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/25.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/18.jpg" alt="" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light py-0 text-center"><a class="btn btn-sm btn-link py-2" href="#!">Show
                    All Projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
        </div>
    </div>
@endsection
