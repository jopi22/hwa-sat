<!-- ===============================================-->
<!--     Modal Edit Akun-->
<!-- ===============================================-->
@foreach ($kar as $res)
    <div class="modal fade" id="reset-{{ $res->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 600px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('akun.u', $res->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-edit"></i>
                            {{ $res->name }}</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            @if ($res->level == 2)
                                <label>Email</label>
                                <input required type="email" class="form-control" name="username"
                                    value="{{ $res->email }}">
                            @else
                                <label>NIK</label>
                                <input type="text" class="form-control" disabled
                                    value="{{ $res->username }}">
                                <input type="hidden" name="username"
                                    value="{{ $res->tgl_gabung->format('ym') }}{{ $res->id }}">
                            @endif
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Password</label>
                            <input required minlength="4" type="text" class="form-control" name="password"
                                maxlength="20" value="{{ $res->password_view }}">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Role</label><br>
                            <select required name="level" class="form-control">
                                <option value="{{ $res->level }}">{{ $res->level }}</option>
                                {{-- <option value="1">Developer</option> --}}
                                <option value="2">Superadmin (2)</option>
                                <option value="3">Admin HRGA (3)</option>
                                <option value="4">Admin Rental (4)</option>
                                <option value="5">Admin Logistik (5)</option>
                                <option value="6">Karyawan (6)</option>
                                <option value="7">Manajer (7)</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i> Tutup</span>
                        </button>
                        <button class="btn btn-warning" type="submit"><span class="fas fa-magic"></span> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
