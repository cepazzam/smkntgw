 <!--page title start-->
      @extends('page.layout.main') 
      @section('content')
   <!--page title start-->
   
      @include('page.layanan.component.hero')
        <!-- blog section start -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                      <div class="posts-content default-blog">

                        <article class="post-wrapper">
                                <h2 class="font-30 border-bottom pb-3 border-success">{{$first->title??''}}</h2>
                          <div class="thumb-wrapper">   
                                    
                           <img src="{{$first?asset('storage/'.$first->image):''}}" class="img-responsive" alt="image" >
                               
                            <span class="post-comments-number">
                              <i class="fa fa-comments"></i><a href="#">Dok : {{App\Models\Sekolah::first()->nm_skl}}</a>
                            </span>

                          </div><!-- .post-thumb -->


                          <div class="entry-content">
                            <span class="text-dark">{!!$isinfo?$first->content:''!!}</span>
                          </div><!-- .entry-content -->

                        </article><!-- /.post-wrapper -->

                   

                      </div><!-- /.posts-content -->
                    </div><!-- /.col-md-8 -->

                    <div class="col-md-4">
                      <div class="tt-sidebar-wrapper" role="complementary">
                            @include('page.layanan.component.widget')                          
                           <div class="widget widget_categories">
                            @include('page.layanan.component.list')
                           </div><!-- /.widget_categories -->

        
                      </div><!-- /.tt-sidebar-wrapper -->
                    </div><!-- /.col-md-4 -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
  @endsection