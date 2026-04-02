@extends('admin.layout.main')
@section('content')

  <!-- general form elements -->
  <div class="card card-primary p-3">
    
    <div class="card-header d-flex justify-content-between">
      <h5>{{$subtitle}}</h5>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('update-sekolah',$skl->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="row">
        <div class="col-md-4 p-2">
        <div class="form-group">
          <label for="judulBerita">Nama Sekolah</label>
          <input type="text" name="nm_skl" class="form-control" value="{{ $skl->nm_skl}}">
        </div>
        </div>
        <div class="col-md-8 p-2">
        <div class="form-group">
          <label for="judulBerita">Alamat</label>
          <input type="text" name="alamat" class="form-control" value="{{ $skl->alamat}}">
        </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-3 p-2">
            <div class="form-group">
             <label for="judulBerita">Kode POS</label>
          <input type="text" name="pos" class="form-control" value="{{ $skl->pos}}">
            </div>              
            </div>

            <div class="col-md-3 p-2">
            <div class="form-group">
              <label for="judulBerita">NPSN</label>
          <input type="text" name="npsn" class="form-control" value="{{ $skl->npsn}}">
            </div>              
            </div>

            <div class="col-md-3 p-2">
            <div class="form-group">
              <label for="judulBerita">Telp/Fax</label>
          <input type="text" name="telp_fax" class="form-control" value="{{ $skl->telp_fax}}">
            </div>              
            </div>

            <div class="col-md-3 p-2">
            <div class="form-group">
              <label for="judulBerita">Email</label>
          <input type="text" name="email" class="form-control" value="{{ $skl->email}}">
            </div>              
            </div>

          </div>
          

       <div class="row">
          <div class="col-md-4 p-2">
            <div class="form-group">
             <label for="judulBerita">Website</label>
          <input type="text" name="website" class="form-control" value="{{ $skl->website}}">
            </div>              
            </div>

            <div class="col-md-3 p-2">
            <div class="form-group">
              <label for="judulBerita">Nama Kepsek</label>
          <input type="text" name="kepsek" class="form-control" value="{{ $skl->kepsek}}">
            </div>              
            </div>

            <div class="col-md-3 p-2">
            <div class="form-group">
              <label for="judulBerita">NIP Kepsek</label>
             <input type="text" name="nip" class="form-control" value="{{ $skl->nip}}">
            </div>              
            </div>
            <div class="col-md-2 p-2">
            <div class="form-group">
             <label for="judulBerita"></label>
             <button type="button" class="form-control d-flex flex-column justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-logoweb">
              <img src="{{asset('storage/'.$skl->logoweb)}}" alt="" width="30" class="mx-auto">logo Website
             </button>
             
            </div>              
            </div>
            <div class="col-md-2 p-2">
            <div class="form-group">
             
             <button type="button" class="form-control d-flex flex-column justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-logo">
              <img src="{{asset('storage/'.$skl->logo)}}" alt="" width="30" class="mx-auto">logo sekolah
             </button>
             
            </div>              
            </div>
            <div class="col-md-2 p-2">
            <div class="form-group">
             <button type="button" class="form-control d-flex flex-column justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-logofb">
            <img src="{{asset('storage/'.$skl->logofb)}}" alt="" width="20"> Logo facebook

             </button>
             
            </div>              
            </div>
            <div class="col-md-2 p-2">
            <div class="form-group">
             <button type="button" class="form-control d-flex flex-column justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-logotiktok">
            <img src="{{asset('storage/'.$skl->logotiktok)}}" alt="" width="20"> Logo tiktok

             </button>
             
            </div>              
            </div>
            <div class="col-md-2 p-2">
            <div class="form-group">
             <button type="button" class="form-control d-flex flex-column justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-logoig">
            <img src="{{asset('storage/'.$skl->logoig)}}" alt="" width="20"> Logo instagram

             </button>
             
            </div>              
            </div>

            <div class="col-md-2 p-2">
            <div class="form-group">
             <button type="button" class="form-control d-flex flex-column justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-logoyt">
            <img src="{{asset('storage/'.$skl->logoyt)}}" alt="" width="20"> logo youtube

             </button>
             
            </div>              
            </div>
            <div class="col-md-2 p-2">
            <div class="form-group">
             <button type="button" class="form-control" data-bs-toggle="modal" data-bs-target="#modal-banner">
            <img src="{{asset('storage/'.$skl->banner)}}" alt="" width="20"> Hero banner

             </button>
             
            </div>              
            </div>

            <div class="col-md-12 p-2">
            <div class="form-group">
              <label for="judulBerita">Intro Text</label>
              <textarea name="tagline" class="form-control" id="summernote">{{ $skl->tagline}}</textarea>
            </div>              
            </div>

            
      
      </div>
      


      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </div>
      </div>
    </form>
  </div>
  
  
@include('admin.page.setting.logo')
@include('admin.page.setting.logoweb')
@include('admin.page.setting.logofb')
@include('admin.page.setting.logotiktok')
@include('admin.page.setting.logoig')
@include('admin.page.setting.logoyt')
@include('admin.page.setting.banner')
@endsection
