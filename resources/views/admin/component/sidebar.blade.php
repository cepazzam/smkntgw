     <div id="sidebar">
         <div class="sidebar-wrapper active">
             <div class="position-relative">
                 <div class="d-flex justify-content-between align-items-center">
                     <div class="d-flex gap-2 p-3 align-items-center">

                         <img width="60" src="{{ asset('storage/' . $set->logo) }}" alt="Logo">
                         <h4>{{ $set->nm_skl }}</h4>
                     </div>

                     <div class="sidebar-toggler  x">
                         <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>

                     </div>

                 </div>
             </div>
             <div class="sidebar-menu">
                 <ul class="menu">
                     <li class="sidebar-title d-flex justify-content-between align-items-center">Main Menu
                     </li>

                     <li class="sidebar-item active ">
                         <a href="{{ route('dashboard') }}" class='sidebar-link'>
                             <i class="bi bi-grid-fill"></i>
                             <span>Dashboard</span>
                         </a>


                     </li>

                     <li class="sidebar-item  has-sub">
                         <a href="#" class='sidebar-link'>
                             <i class="bi bi-stack"></i>
                             <span>Pengaturan</span>
                         </a>
                         <ul class="submenu ">
                             <li class="submenu-item  ">
                                 <a href="{{ route('userlist') }}" class="submenu-link">Users</a>
                             </li>
                             <li class="submenu-item  ">
                                 <a href="{{ route('data-sekolah') }}" class="submenu-link">Website</a>
                             </li>
                         </ul>
                     </li>

                     <li class="sidebar-item  has-sub">
                         <a href="#" class='sidebar-link'>
                             <i class="bi bi-collection-fill"></i>
                             <span>Profil</span>
                         </a>

                         <ul class="submenu ">
                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'skl') }}" class="submenu-link">Sekolah</a>

                             </li>

                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'dkv') }}" class="submenu-link">Konsentrasi DKV</a>

                             </li>



                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'aphpi') }}" class="submenu-link">Konsentrasi APHPi</a>

                             </li>




                         </ul>


                     </li>

                     <li class="sidebar-item  has-sub">
                         <a href="#" class='sidebar-link'>
                             <i class="bi bi-grid-1x2-fill"></i>
                             <span>Layanan</span>
                         </a>

                         <ul class="submenu ">

                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'kurikulum') }}" class="submenu-link">Kurikulum</a>

                             </li>

                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'kesiswaan') }}" class="submenu-link">Kesiswaan</a>

                             </li>

                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'sarpras') }}" class="submenu-link">Sarana Prasarana</a>

                             </li>

                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'hubinmas') }}" class="submenu-link">Hubinmas</a>
                             </li>
                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'bk') }}" class="submenu-link">Konseling</a>
                             </li>
                             <li class="submenu-item  ">
                                 <a href="{{ route('list-info', 'bkk') }}" class="submenu-link">Bursa Kerja</a>
                             </li>


                         </ul>


                     </li>

                     <li class="sidebar-title">Publikasi</li>

                     <li class="sidebar-item  has-sub">
                         <a href="#" class='sidebar-link'>
                             <i class="bi bi-grid-1x2-fill"></i>
                             <span>Posting</span>
                         </a>

                         <ul class="submenu ">

                             <li class="submenu-item  ">
                                 <a href="{{ route('post.index') }}" class="submenu-link">Berita</a>

                             </li>
                             <li class="submenu-item  ">
                                 <a href="{{ route('publikasi', 'artikel') }}" class="submenu-link">Artikel</a>

                             </li>

                             <li class="submenu-item  ">
                                 <a href="{{ route('agenda.index') }}" class="submenu-link">Agenda</a>

                             </li>
                             <li class="submenu-item  ">
                                 <a href="{{ route('publikasi', 'sambutan') }}" class="submenu-link">Sambutan</a>

                             </li>
                              <li class="submenu-item  ">
                                 <a href="{{ route('publikasi', 'pengumuman') }}" class="submenu-link">Pengumuman</a>

                             </li>
                         </ul>


                     </li>

                     <li class="sidebar-item  has-sub">
                         <a href="#" class='sidebar-link'>
                             <i class="bi bi-collection-fill"></i>
                             <span>Multimedia</span>
                         </a>

                         <ul class="submenu ">
                             <li class="submenu-item  ">
                                 <a href="{{ route('photo.index') }}" class="submenu-link">Foto</a>

                             </li>

                             <li class="submenu-item  ">
                                 <a href="{{ route('video.index') }}" class="submenu-link">Video</a>

                             </li>




                         </ul>
                     </li>
                     <li class="sidebar-item  has-sub">
                         <a href="#" class='sidebar-link'>
                             <i class="bi bi-stack"></i>
                             <span>Page Component</span>
                         </a>
                         <ul class="submenu ">
                             <li class="submenu-item  ">
                                 <a href="{{ route('hero.index') }}" class="submenu-link">Hero Page</a>

                             </li>
                             <li class="submenu-item  ">
                                 <a href="{{ route('widget.index') }}" class="submenu-link">Widget</a>

                             </li>
                         </ul>
                     </li>


                     <li class="sidebar-item  ">
                         <a href="{{ route('list-info', 'spmb') }}" class='sidebar-link'>
                             <i class="bi bi-file-earmark-medical-fill"></i>
                             <span>Informasi SPMB</span>
                         </a>


                     </li>

                 </ul>
             </div>
         </div>
     </div>
