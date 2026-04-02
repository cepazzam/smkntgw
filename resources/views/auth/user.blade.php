@php
  use App\Models\Sekolah;  
  $set = Sekolah::first();
  $profil = App\Models\Widget::where('kategori','user')->first();
@endphp
<div class="modal fade" id="modal-userWidget">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ganti Foto untuk {{Auth::user()->name}}</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{$profil?asset('storage/'.$profil->image):asset('assets/compiled/jpg/1.jpg')}}" class="img-fluid rounded-top w-25"
            alt="image"/>
          <form action="{{route('storeUser')}}" method="POST" enctype="multipart/form-data">
            @csrf
           <input type="hidden" name="kategori" value="{{'user'}}">
           <div class="form-group">
                
                <input type="hidden" name="url" class="form-control" value="https://smkntegalwaru.sch.id" required>
                </div>
                <div class="form-group">
                <label for="name">Image</label>
                <input type="file" name="image" class="form-control">
                </div>
            
            
        </div>
        <div class="modal-footer justify-content-between">
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