 <!--page title start-->
      @extends('page.layout.main') 
      @section('content')
  <section class="page-title page-title-bg ptb-50">
            <div class="container">
                <h2 class="text-bold white-text font-30">{{$title}}</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('agenda')}}">{{$title}}</a></li>
                    <li class="active">{{date('Y')}}</li>
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
                         <h2 class="mb-30">Agenda Tahun {{date('Y')}}</h2>
                  <div class="panel-group feature-accordion brand-accordion icon angle-icon" id="accordion-one">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion-one" href="#collapse-one">
                            {{$active->name}}
                          </a>
                        </h3>
                      </div>
                      <div id="collapse-one" class="panel-collapse collapse in">
                        <div class="panel-body border px-3">
                          <span class="text-dark">{{$active->content}}</span>
                        </div>
                      </div>
                    </div>
                    @foreach ($agendas as $item)
                        
                    
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-two{{$item->id}}">
                            {{$item->name}}
                          </a>
                        </h3>
                      </div>
                      <div id="collapse-two{{$item->id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                          {{$item->content}}
                        </div>
                      </div>
                    </div>
                    
                    @endforeach
                  </div>                 


                      </div><!-- /.posts-content -->
                    </div><!-- /.col-md-8 -->
                    
                    <div class="col-md-4">
                      <div class="tt-sidebar-wrapper" role="complementary">
                          <div class="widget widget_search">
                            <img src="{{asset('storage/'.$widget->image)}}" alt="image" class="img-responsive w-100">
                          </div><!-- /.widget_search -->
        
                      </div><!-- /.tt-sidebar-wrapper -->
                    </div><!-- /.col-md-4 -->

                  </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- blog section end -->

  @endsection