@extends('layouts.layout')
@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection
@section('script')
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection
@section('konten')
    <div class="card mb-3 bg-light">
        <div class="card-header bg-light">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0 text-800"><i class="fas fa-user-circle"></i> CEK</h5>
                </div>
                {{-- -- Breadcrumb -- --}}
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('dash') }}"><code>Dashboard</code></a>
                        <code class="text-black">&gt; MasterKaryawan</code>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('comp.alert')
    <h5></h5>
    <div class="card mb-3 bg-light">
        <form action="{{ route('cekstore') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="status[]" value="{{ $list_kar }}" class="form-control" placeholder="status" >
            <input type="text" name="karyawan[]" value="{{ $list_kar }}" class="form-control" placeholder="karyawan" >
            <input type="date" name="created_at[]"  class="form-control" placeholder="karyawan" >
            <input type="date" name="updated_at[]"  class="form-control" placeholder="karyawan" >
            <button type="submit">ok</button>
        </form>
    </div>
@endsection
