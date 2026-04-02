@if (App\Models\Hero::where('kategori',$kategori)->first()) 
@php
   $item = App\Models\Hero::where('kategori',$kategori)->first();    
 
@endphp   

<div class="modal modal-xl fade" id="modal-edithero{{$kategori}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Heropage</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex">
           
               
                    <img src="{{asset('storage/'.$item->image)}}" width="30%" class="me-3">
                
               
        <form action="{{route('hero.update',$item->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
           <input type="hidden" name="kategori" value="{{$item->kategori}}">
           <div class="form-group">
                <label for="name">URL </label>
                <input type="text" name="url" class="form-control" value="{{$item->url}}" required>
                </div>
                <div class="form-group">
                <label for="name">Image</label>
                <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                <label for="name">Content </label>

                <textarea name="content" id="summernote" class="form-control">
                    {{$item->content}}
                </textarea>
                </div>
            
            
        </div>
        <div class="modal-footer justify-content-center bg-light">
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
       
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  @endif