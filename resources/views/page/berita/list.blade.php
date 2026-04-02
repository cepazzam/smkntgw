                                <img src="{{asset('storage/'.App\Models\Widget::where('kategori','skl')->first()->image)}}" class="img-responsive w-100" alt="Image">

<div class="tt-sidebar-wrapper mt-5" role="complementary">
                          <div  class="widget widget_tt_popular_post">
                            <div class="tt-popular-post border-bottom-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true">Berita</a>
                                    </li>
                                    <li class="">
                                        <a href="#tt-popular-post-tab2" data-toggle="tab" aria-expanded="false">Artikel</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- latest post tab -->
                                    <div id="tt-popular-post-tab1" class="tab-pane fade active in">
                                        @foreach ($list as $item)
                                            
                                        
                                      <div class="media">
                                        <a class="media-left" href="{{route('read-berita',$item->slug)}}">
                                          <img src="{{asset('storage/'.$item->image)}}" alt="image" class="rounded">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="{{route('read-berita',$item->slug)}}">{{$item->title}}</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->
                                        @endforeach
                                    </div>

                                    <!-- popular post tab-->
                                    <div id="tt-popular-post-tab2" class="tab-pane fade">
                                        @foreach ($artikel as $item)

                                      <div class="media">
                                        <a class="media-left" href="#">
                                          <img src="{{asset('storage/'.$item->image)}}" alt="" class="rounded">
                                        </a>

                                        <div class="media-body">
                                          <h4><a href="#">{{$item->title}}</a></h4>
                                        </div> <!-- /.media-body -->
                                      </div> <!-- /.media -->
                                      @endforeach

                                    </div>
                                </div><!-- /.tab-content -->
                            </div><!-- /.tt-popular-post -->
                          </div><!-- /.widget_tt_popular_post -->
       
                      </div><!-- /.tt-sidebar-wrapper -->