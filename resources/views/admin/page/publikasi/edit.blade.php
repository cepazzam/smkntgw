@extends('admin.layout.main')
@section('content')

  <!-- general form elements -->
  <div class="card card-primary">
   
    <div class="card-header d-flex justify-content-between border-bottom">
      <h5>Edit {{$publikasi->kategori}}</h5>
      <a href="#" onclick="history.back()" class="badge bg-light mb-2"><< Back</a>

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('publikasi.update', $publikasi->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input type="hidden" name="kategori" value="{{$publikasi->kategori}}">
      <div class="card-body">
        <div class="row">
        <div class="form-group col-md-7">
          <label for="judulBerita">Judul</label>
          <input type="text" name="title" class="form-control" value="{{ $publikasi->title }}">
        </div>
        
        <div class="form-group col-md-4 d-flex gap-2">
        <img src="{{asset('storage/'.$publikasi->image)}}" alt="" width="50">
        <div>
          <label for="judulBerita">Gambar <span>{{$publikasi->kategori=='pengumuman'?'Banner':''}}</label>
          <input type="file" name="image" class="form-control" required>
        </div>        
      </div>
        
      <div class="row">
          <div class="form-group col-md-12">
          <div class="form-group">
          <label for="konten">Konten</label>
          
            <textarea id="summernote" name="content" class="form-control">
                {{$publikasi->content}}
            </textarea>
          </div>
          </div>
      </div>
      <div class="row" style="display:{{ $publikasi->kategori == 'pengumuman' ? 'none' : '' }}">
       <div class="form-group col-md-6">
          <label for="judulBerita">Penulis</label>
          <input type="text" name="penulis" class="form-control" value="{{$publikasi->penulis}}">
        </div>
        <div class="form-group col-md-6">
          <label for="judulBerita">Jabatan</label>
          <input type="text" name="jabatan" class="form-control" value="{{ $publikasi->jabatan }}">
        </div>

      </div>
      </div>
      


      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </div>
    </form>
  </div>
@endsection