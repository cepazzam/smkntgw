<!--page title start-->
@extends('page.layout.main')
@section('content')
    <section class="page-title page-title-bg ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="white-text font-40">{{ $title }}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">Berita</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--page title end-->
    <!-- Latest News Card Style -->
    <section class="section-padding latest-news-card">
        <div class="container">
            <div class="row">
                <div id="blogGrid">
                    @foreach ($list as $item)
                        <div class="col-xs-12 col-sm-6 col-md-3 blog-grid-item mb-30">
                            <a href="{{ route('read-berita', $item->slug) }}">
                                <article class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="img-responsive" src="{{ asset('storage/' . $item->image) }}"
                                            alt="image">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="entry-title activator">{{ $item->title }}</h2>
                                    </div>

                                </article><!-- /.card -->
                            </a>
                        </div><!-- /.col-md-3 -->
                    @endforeach
                </div><!-- /#blogGrid -->

            </div><!-- /.row -->
            {!! $list->links('vendor.pagination.custom') !!}


        </div><!-- /.container -->
    </section>
@endsection
<!-- Latest News Card Style End-->
