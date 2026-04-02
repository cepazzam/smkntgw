<div class="modal fade" id="modaldelete{{ $item->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-danger bg-danger">
          <h4 class="modal-title text-light">Delete Info</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
                     
              
            <h5 class="align-center text-danger"><i class="fas fa-exclamation-triangle text-danger"></i> 
              Yakin Anda Menghapus data ini!!</h5>                  
            
        </div>
        <div class="modal-footer border-0 justify-content-center">
          <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
          <a href="{{route('destroy', $item->id)}}" class="btn btn-outline-danger">Delete</a>
        </div>
     
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>