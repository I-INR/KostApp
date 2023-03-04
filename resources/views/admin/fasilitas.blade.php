@extends('admin.template.admin')
@section('body')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Profil</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Fasilitas</h4>
                </div>
                <form action="{{ route('admin.fasilitas.update') }}" method="POST">
                    @csrf
                    <div class="invisible"><input type="text" class="form-control" id="id"
                        name="id" value="{{ $data->id }}"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-xl" placeholder="Kulkas"
                                            disabled>
                                        <div class="form-control-icon">
                                            <input class="form-check-input  me-0" type="checkbox" name="icebox"
                                                @if ($data->icebox) checked @endif>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-xl" placeholder="Wi-fi"
                                            disabled>
                                        <div class="form-control-icon">
                                            <input class="form-check-input  me-0" type="checkbox" name="wifi"
                                                @if ($data->wifi) checked @endif>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-xl" placeholder="Dapur"
                                            disabled>
                                        <div class="form-control-icon">
                                            <input class="form-check-input  me-0" type="checkbox" name="kitchen"
                                                @if ($data->kitchen) checked @endif>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-xl"
                                            placeholder="Kamar Mandi Dalam" disabled>
                                        <div class="form-control-icon">
                                            <input class="form-check-input  me-0" type="checkbox" name="bathroom"
                                                @if ($data->bathroom) checked @endif>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-xl" placeholder="Kasur"
                                            disabled>
                                        <div class="form-control-icon">
                                            <input class="form-check-input  me-0" type="checkbox" name="mattress"
                                                @if ($data->mattress) checked @endif>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-xl" placeholder="Lemari"
                                            disabled>
                                        <div class="form-control-icon">
                                            <input class="form-check-input  me-0" type="checkbox" name="cupboard"
                                                @if ($data->cupboard) checked @endif>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
