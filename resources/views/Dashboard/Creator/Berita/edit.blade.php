@extends('Dashboard/main')
@section('title','Deashboard Editor :Kategori')
@section('content')

<div class="header bg-primary pb-6">

</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text">{{ $message }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h1 class="mb-4">Tambah Data Berita</h1>
                    <a class="btn btn-success" href="{{ route('Creator.Berita.Index') }}">Kembali</a>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <div class="form-group has-success">
                                    <label class="form-control-label" for="">Judul</label>
                                    <input type="text" class="form-control is-valid" id="" placeholder="First name"
                                        value="Mark" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <div class="form-group has-success">
                                    <label class="form-control-label" for="">Author</label>
                                    <input type="text" class="form-control is-valid" id="" placeholder="First name"
                                        value="Mark" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <label class="form-control-label" for="">Kategori</label>
                                <select class="form-control" data-toggle="select">
                                    <option>Alerts</option>
                                    <option>Badges</option>
                                    <option>Buttons</option>
                                    <option>Cards</option>
                                    <option>Forms</option>
                                    <option>Modals</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <label class="form-control-label" for="">Thumbnail</label>
                                <div class="dropzone dropzone-single mb-3" data-toggle="dropzone"
                                    data-dropzone-url="http://">
                                    <div class="fallback">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="projectCoverUploads">
                                            <label class="custom-file-label" for="projectCoverUploads">Choose
                                                file</label>
                                        </div>
                                    </div>
                                    <div class="dz-preview dz-preview-single">
                                        <div class="dz-preview-cover">
                                            <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <label class="form-control-label" for="">Deskripsi</label>
                                <textarea name="" id="tiny1" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <label class="form-control-label" for="">Berita</label>
                                <textarea name="" id="tiny2" cols="50" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection