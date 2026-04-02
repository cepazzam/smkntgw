<div class="modal fade" id="editcategory{{$item->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Category</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex">
            
        <form action="{{route('category.update',$item->id)}}" method="POST">
        @csrf
        @method('PUT')
           <div class="form-group col-12">
                <label for="name">Name </label>
                <input type="text" name="name" class="form-control" value="{{$item->name}}" required>
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