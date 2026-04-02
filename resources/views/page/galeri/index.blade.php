@extends('page.layout.main')
@section('content')
    <section class="page-title page-title-bg ptb-50">
        <div class="container">
            <h3 class="text-bold white-text font-30">{{ $title }}</h3>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('galeri') }}">{{ $title }}</a></li>
            </ol>
        </div>
    </section>
    <section class="padding-top-50 ptb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="round-tab text-center">

                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active"><a href="#tab-22" class="waves-effect waves-light"
                                    role="tab" data-toggle="tab"> <i class="fa fa-image"></i> Foto</a></li>
                            <li role="presentation"><a href="#tab-23" class="waves-effect waves-light" role="tab"
                                    data-toggle="tab"> <i class="fa fa-"></i> Video</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="panel-body">
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in active" id="tab-22">
                                    <section class="section-padding">
                                        <div class="container">

                                            <div id="project-slider" class="carousel slide boot-slider"
                                                data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#project-slider" data-slide-to="0" class="active"></li>
                                                    @foreach (range(1, App\Models\Photo::count()) as $number)
                                                        <li data-target="#project-slider"
                                                            data-slide-to="{{ $number }}"></li>
                                                    @endforeach
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <img class="img-responsive w-100"
                                                            src="{{ asset('storage/' . $active->image) }}" alt="">
                                                    </div>
                                                    @foreach ($list as $item)
                                                        <div class="item">
                                                            <img class="img-responsive w-100"
                                                                src="{{ asset('storage/' . $item->image) }}" alt="">
                                                        </div>
                                                    @endforeach

                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#project-slider" role="button"
                                                    data-slide="prev">
                                                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#project-slider" role="button"
                                                    data-slide="next">
                                                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tab-23">
                                    <section class="section-padding">
                                        <div class="container">

                                            <div class="row">
                                                @foreach ($videos as $item)
                                                    <div class="col-md-3">
                                                        <iframe class="w-100"
                                                            src="https://www.youtube.com/embed/{{ $item->embed }}"
                                                            frameborder="0" allowfullscreen></iframe>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </section>
                                </div>


                            </div>
                        </div>

                    </div><!-- /.border-bottom-tab -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <hr>

        </div><!-- /.container -->
    </section>
@endsection
