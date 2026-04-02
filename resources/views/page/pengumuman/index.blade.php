@extends('page.layout.main')
@section('content')
<section class="ptb-90">
<div class="container">
<article class="post-wrapper format-quote">
    <div class="thumb-wrapper">
       
            @if (!empty($promo->image))
                         <img src="{{asset('storage/'.$promo->image)}}" class="img-responsive w-100" alt="">
            @endif

    </div><!-- .post-thumb -->
    <div class="entry-content">
        <h3 class="text-bold">{{$promo->title}}</h3>
        <p>{!!$promo->content!!}</p>
    </div><!-- .entry-content -->

</article><!-- /.post-wrapper -->
<div class="card">
    <div class="card-header">
    <h4 class="text-bold mt-4">Pengumuman Lainnya</h4>
    </div>
    <ul>
        @foreach ($list as $item)
            
        <li class="p-3 text-bold border-bottom"><a href="">>> {{$item->title}}</a></li>
        
        @endforeach
    </ul>
</div>
</div>
</section>
@endsection
