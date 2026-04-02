 <section class="ptb-50 grid-news-hover">
      <div class="container">
        <div class="text-center mb-40">
          <h3 class="section-title font-20">Berita Terbaru</h3>          
        </div>

        <div class="row">

          @foreach ($posts as $item)
              
         
          <div class="col-md-4">
            <article class="post-wrapper border">
              <div class="thumb-wrapper waves-effect waves-block waves-light">
                <a href="{{route('read-berita',$item->slug)}}">
                  <div style="min-height:300px; background-image:url('{{asset('storage/'.$item->image)}}'); background-position:center; bacground-size:cover">

                  </div>
                </a>
                <div class="post-date">{{$item->created_at->translatedFormat('d')}} <span>{{$item->created_at->translatedFormat('M')}}</span></div>
              </div>
              <!-- .post-thumb -->

              <div class="blog-content">
                <div class="hover-overlay green-bg"></div>

                <header class="entry-header-wrapper">
                  <div class="entry-header">
                   <small>Posted : {{Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}</small>
                    <h2 class="entry-title ptb-20">
                      <a href="{{route('read-berita', $item->slug)}}">{{$item->title}}</a>
                    </h2>

              </div>
              <!-- /.blog-content -->
            </article>
            <!-- /.post-wrapper -->
          </div>
          <!-- /.col-md-4 -->
           @endforeach

        </div>
        <!-- /.row -->
      </div>
      
      <!-- /.container -->
      <div class="load-more-button text-center">
      <a href="{{route('berita')}}" class="waves-effect waves-light btn btn-large pink"> <i class="fa fa-spinner left"></i>Berita lainnya</a>
     </div>
    </section>
     
