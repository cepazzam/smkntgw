@extends('page.layout.main')
@section('content')
    <section class="page-title page-title-bg ptb-50">
        <div class="container">
            <h2 class="text-bold white-text font-40">{{ $title }}</h2>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">{{ $title }}</a></li>
            </ol>
        </div>
    </section>
    <!--  Border Box Gutter -->
    <section class="section-padding">
        <div class="container">

            <div class="text-center card bg-dark ptb-90 mb-80">
                <h2 class="section-title">{!! App\Models\Sekolah::first()->tagline !!}</h2>
            </div>

            <div class="row">

                <div class="col-md-4 mb-30">
                    <a href="{{ route('layanan.home', 'kurikulum') }}" class="text-dark">
                        <div class="featured-item border-box radius-4 hover brand-hover">
                            <div class="icon mb-30">
                                <i class="material-icons brand-icon">&#xE32A;</i>
                            </div>
                            <div class="desc">
                                <h2>Kurikulum</h2>
                                <p>{!! Str::words(optional($kur)->content, 15, '...') ?? '' !!}</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </a>
                </div><!-- /.col-md-4 -->


                <div class="col-md-4 mb-30">
                    <div class="featured-item border-box radius-4 hover brand-hover">
                        <a href="{{ route('layanan.home', 'kesiswaan') }}" class="text-dark">
                            <div class="icon mb-30">
                                <i class="material-icons brand-icon">&#xE0BF;</i>
                            </div>
                            <div class="desc">
                                <h2>Kesiswaan</h2>
                                <p>{!! Str::words(optional($sis)->content, 15, '...') ?? '' !!}</p>
                            </div>
                    </div><!-- /.featured-item -->
                    </a>
                </div><!-- /.col-md-4 -->


                <div class="col-md-4 mb-30">
                    <div class="featured-item border-box radius-4 hover brand-hover">
                        <a href="{{ route('layanan.home', 'sarpras') }}" class="text-dark">
                            <div class="icon mb-30">
                                <i class="material-icons brand-icon">&#xE323;</i>
                            </div>
                            <div class="desc">
                                <h2>Sarana dan Prasarana</h2>
                                <p>{!! Str::words(optional($sar)->content, 15, '...') ?? '' !!}</p>
                            </div>
                    </div><!-- /.featured-item -->
                    </a>
                </div><!-- /.col-md-4 -->


                <div class="col-md-4">
                    <div class="featured-item border-box radius-4 hover brand-hover">
                        <a href="{{ route('layanan.home', 'hubinmas') }}" class="text-dark">
                            <div class="icon mb-30">
                                <i class="material-icons brand-icon">&#xE32A;</i>
                            </div>
                            <div class="desc">
                                <h2>Hubinmas</h2>
                                <p>{!! Str::words(optional($hub)->content, 15, '...') ?? '' !!}</p>
                            </div>
                    </div><!-- /.featured-item -->
                    </a>
                </div><!-- /.col-md-4 -->


                <div class="col-md-4">
                    <a href="{{ route('layanan.home', 'bk') }}" class="text-dark">
                        <div class="featured-item border-box radius-4 hover brand-hover">
                            <div class="icon mb-30">
                                <i class="material-icons brand-icon">&#xE149;</i>
                            </div>
                            <div class="desc">
                                <h2>Bimbingan dan Konseling</h2>
                                <p>{!! Str::words(optional($bk)->content, 15, '...') ?? '' !!}</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </a>
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <a href="{{ route('layanan.home', 'bkk') }}" class="text-dark">
                        <div class="featured-item border-box radius-4 hover brand-hover">
                            <div class="icon mb-30">
                                <i class="material-icons brand-icon">&#xE0C9;</i>
                            </div>
                            <div class="desc">
                                <h2>Bursa Kerja dan Kewirausahaan</h2>
                                <p>{!! Str::words(optional($bkk)->content, 15, '...') ?? '' !!}</p>
                            </div>
                        </div><!-- /.featured-item -->
                    </a>
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!--  Border Box Gutter End -->
@endsection
