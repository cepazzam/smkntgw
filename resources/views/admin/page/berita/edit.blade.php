@extends('admin.layout.main')
@section('content')

  <!-- general form elements -->
  <div class="card card-primary">
   
    <div class="card-header d-flex justify-content-between">
      <a href="{{route('post.index')}}" class="btn btn-success btn-xs">News List</a>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
       @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="judulBerita">Judul</label>
          <input type="text" name="title" class="form-control" value="{{ $post->title}}">
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <div class="d-flex justify-content-between">
              <label>Kategori</label>
              
            </div>

                          <select class="form-control select2bs4" style="width: 100%;" name="category_id">
                                @foreach ($categories as $category)
                                    @if ($post->category_id == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>

               
             
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <div class="d-flex justify-content-between">
              <label>Status</label>
              
            </div>
              <select class="form-control select2bs4" style="width: 100%;" name="status" required>
                <option value="{{$post->status}}" selected="selected">
                  @switch($post->status)
                            @case('0')<a href="" class="badge bg-warning p-1 px-3 rounded-pill">{{'Draft'}}</a>                            
                            @break
                            @case('1')<a href="" class="badge bg-success p-1 px-3 rounded-pill">{{'Posted'}}</a>                             
                            @break                          
                            @default <a href="" class="badge bg-secondary p-1 px-3 rounded-pill">{{'archive'}}</a>                               
                          @endswitch
                </option>
                
                <option value="0">Draft</option>
                <option value="1">Posted</option>
                <option value="2">Archive</option>
                               
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
          
        
        </div>
      <div class="row">
          <div class="form-group col-md-12">
          <div class="form-group">
          <label for="konten">Konten</label>
          
            <textarea id="summernote" name="content" class="form-control">
                {{$post->content}}
            </textarea>
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