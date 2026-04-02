
<div class="modal modal-lg fade" id="modal-hero{{$kategori}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Heropage for {{$kategori}} Page</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
          <form action="{{route('hero.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
           <input type="hidden" name="kategori" value="{{$kategori}}">
           <div class="form-group">
                <label for="name">URL </label>
                <input type="text" name="url" class="form-control" value="" required>
                </div>
                <div class="form-group">
                <label for="name">Image</label>
                <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                <label for="name">Image</label>
                <textarea name="content" id="summernote" cols="30" rows="10"></textarea>
                </div>
            
            
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->