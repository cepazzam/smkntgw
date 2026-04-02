@if ($profil)
    

<div class="modal modal-lg fade" id="modal-editWidget{{$profil->kategori}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Foto Profil</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex">
        <img src="{{asset('storage/'.$profil->image)}}" width="30%" class="me-3">
        <form action="{{route('updateWidgetUser',$profil->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
           <input type="hidden" name="kategori" value="{{$profil->kategori}}">
           <div class="form-group">
                <label for="name">URL </label>
                <input type="text" name="url" class="form-control" value="{{$profil->url}}" required>
                </div>
                <div class="form-group">
                <label for="name">Image</label>
                <input type="file" name="image" class="form-control">
                </div>
            
            
        </div>
        <div class="modal-footer justify-content-center">
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