        <!--page title start-->
      @extends('page.layout.main') 
      @section('content')
  <section class="page-title page-title-bg ptb-50">
            <div class="container">
                <h2 class="text-bold white-text font-40">{{$title}}</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">{{$title}}</a></li>
                </ol>
            </div>
        </section>
       
       <section class="section-padding">
          
          <div class="container">

            <div class="row">
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.498148920735!2d107.3342511745366!3d-6.620881664721634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6907f5cd242925%3A0xc4864b89422efc83!2sSMKN%20TEGALWARU%20PURWAKARTA!5e1!3m2!1sid!2sid!4v1774515753100!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div><!-- /.col-md-8 -->

                <div class="col-md-4 contact-info">

                    <address>
                      <i class="material-icons brand-color">&#xE55F;</i>
                      <div class="address">
                        {{$skl->alamat}}<br>
                       Kode Pos: {{$skl->pos}}
                      </div>

                      <i class="material-icons brand-color">&#xE61C;</i>
                      <div class="phone">
                        <p>Telp/Fax: {{$skl->telp_fax}}<br>
                      </p>
                      </div>

                      <i class="material-icons brand-color">&#xE0E1;</i>
                      <div class="mail">
                        <p><a href="mailto:#">{{$skl->email}}</a><br>
                        <a href="#">{{$skl->website}}</a></p>
                      </div>
                    </address>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </div>
        </section>

        @endsection