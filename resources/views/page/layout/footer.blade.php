<footer class="footer footer-four">
      <div class="primary-footer dark-bg lighten-1 text-center">
        <div class="container">
          <a
            href="#top"
            class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light"
            data-section="#top"
          >
            <i class="material-icons">&#xE316;</i>
          </a>

          <ul class="social-link tt-animate ltr p-3 pt-4">
            <li>
              <img src="{{asset('storage/'.$skl->logofb)}}" alt="" width="30">
            </li>
             <li>
              <img src="{{asset('storage/'.$skl->logotiktok)}}"  alt="" width="30">
            </li>
             <li>
              <img src="{{asset('storage/'.$skl->logoig)}}" alt="" width="30">
            </li>
             <li>
              <img src="{{asset('storage/'.$skl->logoyt)}}" alt="" width="30">
            </li>
            
            
          </ul>

          <hr class="mt-15 "  style="background: greenyellow; height:2px"/>

          <div class="row">
            <div class="col-md-12">
              <div class="footer-logo">
                <img src="{{asset('storage/'.$skl->logo)}}" alt=""  width="100"/>
                <h2 class="text-light text-bold my-2">{{$skl->nm_skl}}</h2>
                <p>{{$skl->alamat}} -{{$skl->pos}} telp/fax: {{$skl->telp_fax}}</p>
              </div>

              
              <div class="footer-intro">
                Konsentrasi Keahlian
                <p>
                 <a href="{{route('layanan.home','dkv')}}">Desain Komunikasi Visual (DKV)</a> - 
                 <a href="{{route('layanan.home','aphpi')}}">Agribisnis Pengolahan Hasil Perikanan (APHPi)</a><br>
                 <span>Copyright &copy; {{date('Y')}} - All Rights Reserved</span>
                </p>
                
              </div>
              
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.primary-footer -->

      <div class="secondary-footer page-title-bg lighten-2 text-center">
        <div class="container">
          <ul>
            <li><a href="{{route('home')}}">HOME</a></li>
            <li><a href="{{route('profil-sekolah')}}">PROFIL</a></li>
            <li><a href="{{route('layanan')}}">LAYANAN</a></li>
            <li><a href="{{route('galeri')}}">GALERI</a></li>
            <li><a href="{{route('kontak')}}">KONTAK</a></li>
          </ul>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.secondary-footer -->
    </footer>
    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/materialize/js/materialize.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.min.js')}}"></script>
    <script src="{{asset('assets/js/menuzord.js')}}"></script>   
    <script src="{{asset('assets/js/scripts.js')}}"></script>
   
    @yield('js')
  </body>
</html>
