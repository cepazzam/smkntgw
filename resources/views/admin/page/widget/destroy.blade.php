
                                        <!--Danger theme Modal -->
                                        <div class="modal fade text-left" id="widgetdelete{{ $item->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title white" id="myModalLabel120">Widget Delete
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                       <form action="{{route('widget.destroy',$item->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <p class="text-danger text-center">Yakin Menghapus data ini..?</p>
                                                  
                                                    
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="submit" class="btn btn-danger ms-1"
                                                            >
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Delete</span>
                                                    </button>
                                                        </form>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>