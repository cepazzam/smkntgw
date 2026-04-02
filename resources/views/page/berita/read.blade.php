 <!--page title start-->
      @extends('page.layout.main') 
      @section('content')
  <section class="page-title page-title-bg ptb-50">
            <div class="container">
                <h2 class="text-bold white-text font-30">{{$title}}</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('berita')}}">Berita</a></li>
                    <li class="active">read</li>
                </ol>
            </div>
        </section>
      
        <!--page title end-->



        <!-- blog section start -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                      <div class="posts-content single-post">

                        <article class="">

                          <header class="entry-header-wrapper clearfix">

                            
                            
                            <div class="entry-header">
                              <h2 class="entry-title">{{$read->title}}</h2>

                              <div class="entry-meta d-flex justify-content-between align-items-center">
                                  <ul class="list-inline">
                                      <li>
                                          <i class="fa fa-user"></i> <a href="#">By Admin</a>
                                      </li>

                                      <li>
                                          <i class="fa fa-clock-o"></i>
                                        Posted : {{Carbon\Carbon::parse($read->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}
                                      </li>
                                  </ul>
                                  <span class="badge bg-light text-dark border rounded-pill px-3">
                                       <i class="fa fa-tags"></i> {{$read->category->name}}
                                  </span>
                              </div><!-- .entry-meta -->
                            </div>

                          </header><!-- /.entry-header-wrapper -->

                          <div class="thumb-wrapper">
                            <img src="{{asset('storage/'.$read->image)}}" class="img-responsive w-100 border" alt="" >
                          </div><!-- .post-thumb -->


                          <div class="entry-content">
                            <span class="text-dark">{!!$read->content!!}</span>
                          </div><!-- .entry-content -->

                          <footer class="entry-footer">

                            

                            <ul class="list-inline right share-post">
                                <li><a href="#"><i class="fa fa-facebook"></i> <span>Share</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> <span>Tweet</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> <span>Plus</span></a>
                                </li>
                            </ul>
                          </footer>

                        </article><!-- /.post-wrapper -->
                      </div>
                    </div>
                    <div class="col-md-4">
                      @include('page.berita.list')
                       @include('page.berita.kategori')
                    </div><!-- /.col-md-4 -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->

  @endsection