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
    <div class="card">
        </form>
        <div class="card-body overflow-hidden p-lg-6">
            <div class="row align-items-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/icons/spot-illustrations/21.png" alt="" />
                </div>
                <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                    <h3 class="text-primary">RENTAL</h3>
                    <p class="lead">Create Something Beautiful.</p><a class="btn btn-falcon-primary"
                        href="#">Getting started</a>
                </div>
            </div>
        </div>
    </div>
@endsection
