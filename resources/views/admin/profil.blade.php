@extends('template.user')
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
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
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
                <form action="{{ route('user.profil.update') }}" method="POST">
                    @csrf
                    <div class="invisible"><input type="text" class="form-control" id="id"
                            name="id" value="{{ $data->id }}"></div>
                    <div class="card-body">
                        <div class="col-md-auto">
                            <div class="form-group">
                                <label for="namekost">Nama Kost</label>
                                <input type="text" class="form-control" id="namekost" placeholder="Nama Kost"
                                    name="namekost" value="{{ $data->namekost }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" rows="3">{{ $data->deskriptions }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat"
                                    name="alamat" value="{{ $data->alamat }}">
                            </div>

                            <div class="mb-3">
                                <label for="fotolingkungan" class="form-label">Foto Lingkungan</label>
                                <input class="form-control" type="file" id="fotolingkungan" name="fotolingkungan" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="fotokamar" class="form-label">Foto Kamar</label>
                                <input class="form-control" type="file" id="fotokamar" name="fotokamar" accept="image/*">
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
