<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\AuthController::class,'login']);
Route::post('loginpost', [App\Http\Controllers\AuthController::class,'loginpost'])->name('loginpost');
Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::any('/page/cari',[App\Http\Controllers\HomeController::class,'cari'])->name('cari');
Route::get('/berita',[App\Http\Controllers\BeritaController::class,'index'])->name('berita');
Route::get('/berita/read/{slug}',[App\Http\Controllers\BeritaController::class,'read'])->name('read-berita');
Route::get('/berita/category/{id}',[App\Http\Controllers\BeritaController::class,'postcategory'])->name('kategori-berita');
Route::get('/profil/sekolah',[App\Http\Controllers\SekolahController::class,'index'])->name('profil-sekolah');
Route::get('/profil/sekolah/read/{slug}',[App\Http\Controllers\SekolahController::class,'read'])->name('read-profil');
Route::get('/agenda',[App\Http\Controllers\AgendaController::class,'index'])->name('agenda');
Route::get('/spmb',[App\Http\Controllers\SpmbController::class,'index'])->name('spmb');
Route::get('/spmb/info',[App\Http\Controllers\SpmbController::class,'read'])->name('read-spmb');
Route::get('/konsentrasi/dkv',[App\Http\Controllers\DkvController::class,'index'])->name('dkv');
Route::get('/konsentrasi/dkv/info',[App\Http\Controllers\DkvController::class,'read'])->name('read-dkv');
Route::get('/konsentrasi/aphi',[App\Http\Controllers\AphiController::class,'index'])->name('aphi');
Route::get('/konsentrasi/aphi/info',[App\Http\Controllers\AphiController::class,'read'])->name('read-aphi');
//sambutan
Route::get('/publikasi/sambutan/read/{slug}',[App\Http\Controllers\HomeController::class,'sambutan'])->name('sambutan-read');
Route::get('/layanan/pendidikan',[App\Http\Controllers\LayananController::class,'index'])->name('layanan');
Route::get('/layanan/kurikulum',[App\Http\Controllers\KurikulumController::class,'index'])->name('kurikulum');
Route::get('/layanan/kurikulum/read/{slug}',[App\Http\Controllers\KurikulumController::class,'read'])->name('read-kurikulum');
Route::get('/layanan/kesiswaan',[App\Http\Controllers\KesiswaanController::class,'index'])->name('kesiswaan');
Route::get('/layanan/kesiswaan/read/{slug}',[App\Http\Controllers\KesiswaanController::class,'read'])->name('read-kesiswaan');
Route::get('/layanan/hubinmas',[App\Http\Controllers\HubinmasController::class,'index'])->name('hubinmas');
Route::get('/layanan/hubinmas/read/{slug}',[App\Http\Controllers\HubinmasController::class,'read'])->name('read-hubinmas');
Route::get('/layanan/sarpras',[App\Http\Controllers\SarprasController::class,'index'])->name('sarpras');
Route::get('/layanan/sarpras/read/{slug}',[App\Http\Controllers\SarprasController::class,'read'])->name('read-sarpras');
Route::get('/layanan/kategori/{string}',[App\Http\Controllers\LayananController::class,'home'])->name('layanan.home');
Route::get('/layanan/kategori/{kategori}/{slug}',[App\Http\Controllers\LayananController::class,'read'])->name('layanan.read');
Route::get('/galeri',[App\Http\Controllers\GaleriController::class,'index'])->name('galeri');
Route::get('/kontak',[App\Http\Controllers\SekolahController::class,'kontak'])->name('kontak');
//pengumuman
Route::get('/page/pengumuman/read/{kategori}/{slug}',[App\Http\Controllers\PengumumanController::class,'read'])->name('read-pengumuman');

// admin route
Route::group(['middleware'=>'admin'], function(){
Route::get('logout', [App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard'); 
Route::get('user/list',[App\Http\Controllers\AuthController::class,'index'])->name('userlist'); 
Route::get('user/destroy/{id}',[App\Http\Controllers\AuthController::class,'delete'])->name('user-destroy'); 
Route::post('registrasipost', [App\Http\Controllers\AuthController::class,'registrasipost'])->name('registrasipost');
Route::get('sekolah', [App\Http\Controllers\Admin\SekolahController::class,'dataskl'])->name('data-sekolah');
Route::put('logo/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logo'])->name('logo-sekolah');
Route::put('logoweb/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logoweb'])->name('logo-web');
Route::put('banner/{id}', [App\Http\Controllers\Admin\SekolahController::class,'banner'])->name('banner');
Route::put('logofb/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logofb'])->name('logo-fb');
Route::put('logotiktok/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logotiktok'])->name('logo-tiktok');
Route::put('logoig/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logoig'])->name('logo-ig');
Route::put('logoyt/{id}', [App\Http\Controllers\Admin\SekolahController::class,'logoyt'])->name('logo-yt');
Route::put('sekolah/update/{id}', [App\Http\Controllers\Admin\SekolahController::class,'update'])->name('update-sekolah');
Route::resource('admin/page/info', App\Http\Controllers\Admin\InfoController::class);
Route::get('admin/page/info/index/{string}', [App\Http\Controllers\Admin\InfoController::class,'index'])->name('list-info');
Route::get('admin/page/info/create/{string}', [App\Http\Controllers\Admin\InfoController::class,'create'])->name('create');
Route::get('admin/page/info/destroy/{id}', [App\Http\Controllers\Admin\InfoController::class,'destroy'])->name('destroy');
Route::resource('admin/page/widget', App\Http\Controllers\Admin\WidgetController::class);
//only user
Route::post('admin/page/widget/user', [App\Http\Controllers\Admin\WidgetController::class,'storeUser'])->name('storeUser');
Route::put('admin/page/widget/update/{id}', [App\Http\Controllers\Admin\WidgetController::class,'updateWidgetUser'])->name('updateWidgetUser');
Route::resource('admin/page/hero', App\Http\Controllers\Admin\HeroController::class);
Route::resource('admin/page/post', App\Http\Controllers\Admin\PostController::class);
Route::resource('admin/page/category', App\Http\Controllers\Admin\CategoryController::class);
Route::resource('admin/page/agenda', App\Http\Controllers\Admin\AgendaController::class);
Route::resource('admin/page/photo', App\Http\Controllers\Admin\PhotoController::class);
Route::resource('admin/page/video', App\Http\Controllers\Admin\VideoController::class);
Route::resource('admin/page/publikasi', App\Http\Controllers\Admin\PublikasiController::class);
Route::get('admin/page/publikasi/index/{string}', [App\Http\Controllers\Admin\PublikasiController::class,'index'])->name('publikasi');
Route::get('admin/page/publikasi/create/{string}', [App\Http\Controllers\Admin\PublikasiController::class,'create'])->name('publikasi-create');
Route::put('admin/page/agenda/widget/{id}', [App\Http\Controllers\Admin\AgendaController::class,'updatewidget'])->name('update-widgetAgenda');
Route::get('/change-password', [App\Http\Controllers\AuthController::class,'editpassword'])->name('editpassword');
Route::post('/change-password', [App\Http\Controllers\AuthController::class,'repassword'])->name('repassword');
});