@foreach ($aktivitas as $asu)
<div class="modal fade" id="edit-{{$asu->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-6" style="max-width: 500px">
        <div class="modal-content">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('aktivitas.u', $asu->id)}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="{{$asu->status}}">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-truck-monster"></i>
                        {{$asu->aktivitas}}
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="jabatan">Aktivitas</label>
                        <input required maxlength="25" class="form-control" name="aktivitas" value="{{$asu->aktivitas}}" type="text" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="jabatan">Keterangan</label>
                        <textarea maxlength="50" name="ket" class="form-control" cols="30" rows="2">{{$asu->ket}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-light" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                            class="fas fa-times"></span>
                        Batal
                    </button>
                    <button class="btn btn-sm btn-warning" type="submit"><span
                            class="fas fa-magic"></span>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach
