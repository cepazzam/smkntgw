 <!-- Hero Section -->
 <a href="{{route('profil-sekolah')}}">
    <section style="background-image:url({{asset('storage/'.$skl->banner)}}); background-size:cover" class="bg-fixed parallax-bg height-650 valign-wrapper" data-stellar-background-ratio="0.5" >
      <div class="valign-cell">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center text-bold align-items-top">
              <img src="{{asset('storage/'.$skl->logo)}}" width="160" alt="" class="mb-3">
                 {!!$skl->tagline!!}
            </div>
            <!-- row -->
          </div>
          <!-- row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.valign-cell -->
    </section>
    <!-- Hero Section End -->
    </a>
