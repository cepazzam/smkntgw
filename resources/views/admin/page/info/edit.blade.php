@extends('admin.layout.main')

@section('content')

  <!-- general form elements -->
  <div class="card card-primary">
   
    <div class="card-header d-flex justify-content-between">
      <h5>Bidang {{$info->kategori }}</h5>
      <a href="#" onclick="history.back()" class="btn btn-xs btn-warning mb-2"><< Back</a>

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('info.update',$info->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
                <input type="hidden" name="kategori" id="" value="{{$info->kategori}}" class="form-control" disabled">

      <div class="card-body">
        <div class="row">
        <div class="form-group col-md-8">
          <label for="judulBerita">Judul</label>
          <input type="text" name="title" class="form-control" value="{{ $info->title}}">
        </div>
        <div class="form-group col-md-4">
          <label for="judulBerita">Gambar</label>
          <input type="file" name="image" class="form-control" value="{{$info->image}}">
        </div>
        
      </div>
        
      <div class="row">
          <div class="form-group col-md-12">
          <div class="form-group">
          <label for="konten">Konten</label>
          
            <textarea id="summernote" name="content" class="form-control">
                {{ $info->content}}
            </textarea>
          </div>
          </div>
      </div>

      <div class="row">
       
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
