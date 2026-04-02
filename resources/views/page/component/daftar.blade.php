<section class="overlay">
    <!--promo default gray box start-->
    <div class="ptb-50">
        <div class="container">
            <div class="promo-box gray-bg">
                
                    <a href="{{route('read-pengumuman',['kategori'=>$promo->kategori,'slug'=>$promo->slug])}}">
                    <img src="{{ asset('storage/' . $promo->image) }}" class="img-responsive w-100"  alt="image">
                    </a>
              
            </div>
        </div>
    </div>
</section>
