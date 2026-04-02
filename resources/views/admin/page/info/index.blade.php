@extends('admin.layout.main')
@section('content')
<div class="card">
 
    <div class="card-header d-flex justify-content-between align-items-center">
      
            <h5>
                @switch($kategori)
                    @case('kurikulum'){{'Bidang Kurikulum'}}                 
                    @break
                    @case('spmb'){{'Sistem Penerimaan Siswa Baru(SPMB)'}}                 
                    @break
                    @case('hubinmas'){{'Bidang Hubinmas'}}                 
                    @break
                    @case('kesiswaan'){{'Bidang Kesiswaan'}}                 
                    @break
                    @case('sarpras'){{'Bidang Sarana dan Prasarana'}}                 
                    @break
                    @case('bk'){{'Bimbingan dan Konseling'}}                 
                    @break
                    @case('bkk'){{'Bursa Kerja Khusus(BKK)'}}                 
                    @break
                    @case('skl'){{'Profil Sekolah'}}                 
                    @break
                    @case('dkv'){{'Profil KK. Desain Komunikasi Visual(DKV)'}}                 
                    @break
                    @case('aphpi'){{'Profil KK. Agribisnis Pengolahan Hasil Perikanan(APHPi)'}}                 
                    @break
                
                    @default
                        
                @endswitch

            </h5>
            <div class="right">         
            <a href="#" class="{{ App\Models\Widget::where('kategori',$kategori)->first() ?'btn btn-warning btn-sm':'btn btn-success btn-sm'}}" data-bs-toggle="modal" data-bs-target="{{ App\Models\Widget::where('kategori',$kategori)->first() ?'#modal-edit':'#modal-widget'}}{{$kategori}}">{{ App\Models\Widget::where('kategori',$kategori)->first() ?'Update widget':'+ Add Widget'}}</a>
            <a href="#" class="{{ App\Models\Hero::where('kategori',$kategori)->first() ?'btn btn-warning btn-sm':'btn btn-success btn-sm'}}" data-bs-toggle="modal" data-bs-target="{{ App\Models\Hero::where('kategori',$kategori)->first() ?'#modal-edithero':'#modal-hero'}}{{$kategori}}">{{ App\Models\Hero::where('kategori',$kategori)->first() ?'Update Heropage':'+ Add Heropage'}}</a>
            <a href="{{route('create',$kategori)}}" class="btn btn-success btn-sm">+ Add New info</a>
            


            </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
       
            <table class="table table-bordered"  id="table1">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th width="120">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($infos as $item)
                        
                    
                    <tr>
                        <td><img src="{{asset('storage/'.$item->image)}}" alt="" width="60"></td>
                        <td>{{$item->title}}</td>
                        <td>{!!Str::words($item->content,20,'...')!!}</td>
                        <td width="100">
                            <a href="{{route('info.show', $item->id)}}">
                                <i class="badge-circle badge-circle-light-secondary text-primary font-medium-1"
                                                    data-feather="search"></i>
                                
                            </a> 
                            <a href="{{route('info.edit', $item->id)}}">
                              <i class="badge-circle badge-circle-light-secondary text-success font-medium-1"
                                                    data-feather="edit"></i>  
                            </a> 
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modaldelete{{$item->id}}" >
                            <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                                    data-feather="trash"></i>
                            </a> 
                            @include('admin.page.info.destroy')

                        </td>
                    </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
    </div>

    @include('admin.page.info.editwidget')
    @include('admin.page.info.edithero')
    @include('admin.page.info.widget')
    @include('admin.page.info.hero')
@endsection
