 <!--page title start-->
      @extends('page.layout.main') 
      @section('content')
   <!--page title start-->
        <section class="page-title page-title-bg overlay dark-7 ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="text-center">
                             <h1 class="text-uppercase mb-30 text-extrabold font-20 white-text">{{$title}}</h1>
                            <h1 class="text-uppercase mb-30 text-extrabold font-30 white-text">{{$subtitle}}</h1>


                            <p class="width-60 mb-30 white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>

                        </div>
                        
                    </div>
                </div>
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
                            
                            @include('page.profil.desain.listDkv')
                          </div><!-- /.widget_categories -->

        
                      </div><!-- /.tt-sidebar-wrapper -->
                    </div><!-- /.col-md-4 -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->

  @endsection