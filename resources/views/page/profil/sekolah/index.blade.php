 <!--page title start-->
      @extends('page.layout.main') 
      @section('content')
      <section class="page-title overlay dark-5  ptb-50" style="background:url({{asset('storage/'.App\Models\Hero::first()->image)}}); background-position:center; background-size:cover">
            <div class="container">
                <h2 class="text-bold white-text font-30">{{$title}}</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">{{$title}}</a></li>
                </ol>
            </div>
        </section>
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                      <div class="posts-content default-blog">

                        <article class="post-wrapper">
                          <h2 class="font-20 border white-text bg-warning my-3 p-3"><b>{{$first->title}}</b></h2>
                          <img src="{{asset('storage/'.$first->image)}}" class="img-responsive w-100" alt="" >
                         
                          <div class="entry-content">
                          <p>{{$first->content}}</p>                          
                        </div><!-- .entry-content -->

                        </article><!-- /.post-wrapper -->

                   

                      </div><!-- /.posts-content -->
                    </div><!-- /.col-md-8 -->

                    <div class="col-md-4">
                      <div class="tt-sidebar-wrapper" role="complementary">
                          <div class="widget widget_search">
                          <img src="{{asset('storage/'.$widget->image)}}" class="img-responsive w-100" alt="" >
                          </div><!-- /.widget_search -->


                          
                          <div class="widget widget_categories">
                            
                            @include('page.profil.sekolah.listProfil')
                          </div><!-- /.widget_categories -->

        
                      </div><!-- /.tt-sidebar-wrapper -->
                    </div><!-- /.col-md-4 -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->

  @endsection