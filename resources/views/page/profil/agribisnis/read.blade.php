 <!--page title start-->
      @extends('page.layout.main') 
      @section('content')
  <section class="page-title page-title-bg ptb-50">
            <div class="container">
                <h2 class="text-bold white-text font-40">{{$title}}</h2>
                <h2 class="text-bold white-text font-20">{{$subtitle}}</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('spmb')}}">Home</a></li>
                    <li><a href="#">{{$title}}</a></li>
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
                      <div class="posts-content default-blog">

                        <article class="post-wrapper">
                                <h2 class="font-30">IOS Game Design prototype</h2>
                          <div class="thumb-wrapper">
                            
                            <img src="{{asset('assets/img/blog/blog-1.jpg')}}" class="img-responsive" alt="" >

                            
                            <span class="post-comments-number">
                              <i class="fa fa-comments"></i><a href="#">posted</a>
                            </span>

                          </div><!-- .post-thumb -->


                          <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                          </div><!-- .entry-content -->

                        </article><!-- /.post-wrapper -->

                   

                      </div><!-- /.posts-content -->
                    </div><!-- /.col-md-8 -->

                    <div class="col-md-4">
                      <div class="tt-sidebar-wrapper" role="complementary">
                          <div class="widget widget_search">
                            widget
                          </div><!-- /.widget_search -->

                          <div class="widget widget_categories">
                            
                          @include('page.profil.agribisnis.listAphi')

                          </div><!-- /.widget_categories -->

        
                      </div><!-- /.tt-sidebar-wrapper -->
                    </div><!-- /.col-md-4 -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->

  @endsection