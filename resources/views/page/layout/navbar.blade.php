<header id="header" class="tt-nav nav-border-bottom">
      <div class="header-sticky light-header">
        <div class="container">
          <div class="search-wrapper">
            <div class="search-trigger pull-right">
              <div class="search-btn"></div>
              <i class="material-icons">&#xE8B6;</i>
            </div>

            <!-- Modal Search Form -->
            <i class="search-close material-icons">&#xE5CD;</i>
            <div class="search-form-wrapper">
              <form action="{{route('cari')}}" class="white-form" method="post">
                @csrf
                @method('GET')
                <div class="input-field">
                  <input type="text" name="cari" id="search" value="{{ old('cari') }}"/>
                  <label for="search" class="">cari disini...</label>
                </div>
                <button
                  class="btn pink search-button waves-effect waves-light"
                  type="submit"
                >
                  <i class="material-icons">&#xE8B6;</i>
                </button>
              </form>
            </div>
          </div>
          <!-- /.search-wrapper -->

          <div id="materialize-menu" class="menuzord">
            <!--logo start-->
            <a href="{{route('home')}}">
              <img src="{{asset('storage/'.$skl->logoweb)}}" alt="logo" width="300"/>
              
            </a>
            <!--logo end-->

            <!--mega menu start-->
            <ul class="menuzord-menu pull-right">
              <li class="active"><a href="{{route('home')}}">Beranda</a></li>
              <li><a href="{{route('layanan.home','skl')}}">Profil</a></li>
              
              <li>
                <a href="javascript:void(0)">Bidang Layanan</a>
                <ul class="dropdown">
                  <li>
                    <a href="{{route('layanan.home','kurikulum')}}">Bid. Kurikulum</a>
                  </li>
                  <li>
                    <a href="{{route('layanan.home','sarpras')}}"
                      >Bid. Sarana Prasarana</a
                    >
                  </li>
                  <li>
                    <a href="{{route('layanan.home','kesiswaan')}}">Bid. Kesiswaan</a>
                  </li>
                  <li>
                    <a href="{{route('layanan.home','hubinmas')}}">Bid. Hubinmas</a>
                  </li>
                  <li>
                    <a href="{{route('layanan.home','bk')}}">Bimbingan dan Konseling</a>
                  </li>
                  <li>
                    <a href="{{route('layanan.home','bkk')}}">Bursa Kerja dan Kewirausahaan</a>
                  </li>
                </ul>
              </li>
               <li>
                <a href="javascript:void(0)">Konsentrasi</a>
                <ul class="dropdown">
                  <li>
                    <a href="{{route('layanan.home','dkv')}}">Desain Komunikasi Visual</a>
                  </li>
                  <li>
                    <a href="{{route('layanan.home','aphpi')}}"
                      >Agribisnis Pengolahan Hasil Perikanan</a
                    >
                  </li>
                 
                </ul>
              </li>
              <li><a href="{{route('agenda')}}">Agenda</a></li>
              <li ><a href="{{route('layanan.home','spmb')}}"> <span class="bg-danger fw-bold p-3 rounded-pill px-5  border-lg text-light shadow"><b>SPMB {{date('Y')}}</b></span></a></li>
            </ul>
            <!--mega menu end-->
          </div>
        </div>
      </div>
    </header>