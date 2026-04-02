@extends('admin.layout.main')
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">

        <div class="card-header d-flex justify-content-between border-bottom">
            <h5>{{ $kategori }}</h5>
            <a href="#" onclick="history.back()" class="btn btn-secondary btn-sm">
                << Back</a>

        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('publikasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="kategori" value="{{ $kategori }}">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="judulBerita">Judul</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="judulBerita">Gambar <span>{{$kategori=='pengumuman'?'Banner':''}} </sapn></label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="form-group">
                            <label for="konten">Konten</label>

                            <textarea id="summernote" name="content" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row" style="display:{{ $kategori == 'pengumuman' ? 'none' : '' }}">
                    <div class="form-group col-md-6">
                        <label for="judulBerita">Penulis</label>
                        <input type="text" name="penulis" class="form-control" value="{{ old('penulis') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="judulBerita">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan') }}">
                    </div>

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
@endsection
