
                                        <!--Danger theme Modal -->
                                        <div class="modal fade text-left" id="modal-delete{{ $item->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title white" id="myModalLabel120">Post Delete
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">                                                       
                                                        <p class="text-danger text-center">Yakin Menghapus data ini..?</p>
                                                        <form action="{{route('post.destroy', $item->id)}}" method="POSt">
                                                          @csrf
                                                          @method('DELETE')


                                                       
                                                  
                                                    
                                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                           Close
                                                        </button>
                                                        <button type="submit" class="btn btn-danger ms-1">
                                                            Delete
                                                        </button>
                                                      </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>