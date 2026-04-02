@extends('admin.layout.main')
@section('content')

  <!-- general form elements -->
  <div class="card card-primary">
        <div class=" d-flex p-4 mb-0 align-items-center gap-2">
                <a href="{{route('post.index')}}" class="btn btn-outline-info ">News List</a>

        <a href="{{route('category.index')}}" class="btn btn-outline-success btn-xs">News Category</a>
     
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judulBerita">Judul</label>
          <input type="text" name="title" class="form-control" value={{ old('title')}}>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <div class="d-flex justify-content-between">
              <label>Kategori</label>
              
            </div>
              <select class="form-control select2bs4" style="width: 100%;" required name="category_id" required>
                <option selected="selected">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id}}">{{ $category->name }}</option>
                 @endforeach               
              </select>
            </div>
          </div>
            <div class="form-group col-md-4">
            <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="form-control btn btn-info" id="exampleInputFile" name="image">
                        </div>
                      </div>         
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <div class="d-flex justify-content-between">
              <label>Status</label>
              
            </div>
              <select class="form-control select2bs4" style="width: 100%;" name="status" required>
                <option selected="selected">-- Status --</option>
                
                <option value="0">Draft</option>
                <option value="1">Posted</option>
                <option value="2">Archive</option>
                               
              </select>
            </div>
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

      <div class="row">
       
        </div>
      
      </div>
      


      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </div>
    </form>
  </div>
@endsection
