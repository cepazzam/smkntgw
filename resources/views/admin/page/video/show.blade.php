
                                        <!--Danger theme Modal -->
                                        <div class="modal fade modal-lg" id="modalshow{{ $item->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true" >
                                            <div  class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h5 >Video</h5>                                                       
                                                        <p>{{$item->title}}</p>

                                                    </div>
                                                    <div class="modal-body text-center">  
                                                        <iframe 
src="https://www.youtube.com/embed/{{ $item->embed }}"  width="100%" height="240" frameborder="0" 
allowfullscreen ></iframe>
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