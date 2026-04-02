
 <section class="section-padding chart-wrapper">
            <div class="container">
                <div class="row equal-height-row">
                    <div class="col-md-8">
                      <div class="valign-wrapper equal-height-column">
                        <div class="hero-intro valign-cell">
                            <ul>
                                <li class="active">
                                <h2 class="font-40 line-height-50  mb-40">{{App\Models\Publikasi::orderBy('id', 'desc')->first()->title}}</h2>
                                </li>
                            </ul>
                            
                            <span class="text-dark"> {!!$sambutan->content!!}</span>
                            <a href="{{route('sambutan-read',$sambutan->slug)}}" class="btn btn-lg waves-effect waves-light mt-20">Selengkapnya</a>
                        </div><!-- /.hero-intro -->
                      </div><!-- /.container -->
                    </div>

                    <div class="col-md-4 hero-thumb equal-height-column">
                        <img src="{{asset('storage/'.$sambutan->image)}}" class="img-responsive w-100 border-dark mx-auto" alt="Image">
                        <div class="white-text text-center">
                        <h3 class="fw-bold mt-3 white-text">{{$sambutan->penulis}}<br>{{$sambutan->jabatan}}</h3>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
           
        </section>
        
