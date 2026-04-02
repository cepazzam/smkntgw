
                                        <!--Danger theme Modal -->
                                        <div class="modal fade modal-lg" id="modalshow{{ $item->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true" >
                                            <div  class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h5 >Photo</h5>                                                       
                                                        <p>{{$item->caption}}</p>

                                                    </div>
                                                    <div class="modal-body text-center">  
                                                        <img src="{{asset('storage/'.$item->image)}}" class="img-responsive" alt="" style="width:100%">
                                             
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                           Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>