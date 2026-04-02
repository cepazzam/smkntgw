 <!--page title start-->
      @extends('page.layout.main') 
      @section('content')
  <section class="page-title page-title-bg ptb-50">
            <div class="container">
                <h4 class="text-bold white-text font-20">{{$title}}</h4>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">{{$title}}</a></li>
                    <li class="active">read</li>
                </ol>
            </div>
        </section>

         <section class="section-padding">
            <div class="container">
      
                  <div class="panel-body">
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="team-1">
                          <div class="row">
                              <div class="col-md-4 col-sm-3">
                                  <figure class="team-img text-center">
                                      <img src="{{asset('storage/'.$read->image)}}" class="img-responsive w-100" alt="Image">
                                  </figure>
                              </div><!-- /.col-md-4 -->

                              <div class="col-md-8 col-sm-9">

                                  <div class="team-intro">
                                      <h3 class="font-30">{{$read->title}}</h3>
                                     
                                        <span class="text-dark">
                                        {!!$read->content!!}
                                        </span>
                                      
                                  </div>

                              </div> <!-- col-md-8 -->
                          </div> <!-- row -->
                      </div> <!--team-1 end-->
                    </div>
                  </div>
            </div>
         </section>
                  

                      @endsection
