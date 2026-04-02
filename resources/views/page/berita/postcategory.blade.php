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
                            <p class="badge bg-info p-3 white-text ms-auto">{{$read->category->name}}</p>
                          <ul class="media-list comment-list">

                              <!-- Comment Item start-->
                              @foreach ($list as $item)
                                  
                             
                              <li class="media border-bottom ptb-30">
                                <a href="{{route('read-berita', $item->slug)}}">    
                                  <div class="media-left">
                                      <img class="avatar border" src="{{asset('storage/'.$item->image)}}" alt="Jonathon Doe">
                                </div>
                                

                                  <div class="media-body">
                                      <div class="comment-info border-0">
                                          <h4 class="text-dark">
                                            {{$item->title}}
                                          </h4>
                                      </div>

                                      <!--  second level Comment start-->
                                  </div>
                                    </a>
                              </li>
                              @endforeach
                          </ul>
                          <footer class="entry-footer">

                            
                          </footer>

                        </article><!-- /.post-wrapper -->
                      </div>
                    </div>
                    <div class="col-md-4">
                    @include('page.berita.kategori')
                    </div><!-- /.col-md-4 -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->

  @endsection