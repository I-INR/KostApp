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
                    <h4 class="card-title">Profil Kost</h4>
                </div>
                <form action="{{ route('admin.profil.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="invisible"><input type="text" class="form-control" id="id"
                            name="id" value="{{ $data->id }}"></div>
                    <div class="card-body">
                        <div class="col-md-auto">
                            <div class="form-group">
                                <label for="name">Nama Kost</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama Kost"
                                    name="name" value="{{ $data->name }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="description" placeholder="Deskripsi" name="description" rows="3">{{ $data->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" placeholder="Alamat"
                                    name="address" value="{{ $data->address }}">
                            </div>

                            <div class="mb-3">
                                <label for="mainP" class="form-label">Foto Utama</label>
                                <input class="form-control" type="file" id="mainP" name="mainP" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="secondP" class="form-label">Foto Lingkungan</label>
                                <input class="form-control" type="file" id="secondP" name="secondP" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="roomP" class="form-label">Foto Kamar</label>
                                <input class="form-control" type="file" id="roomP" name="roomP" accept="image/*">
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
{{-- @section('externalsJS')
<script type="text/javascript">
    function loadFile(event) {
        // console.log('aktif')
            // var image = document.getElementById("output");
            // image.src = URL.createObjectURL(event.target.files[0]);
        };
</script>
@endsection --}}
