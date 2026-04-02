@extends('admin.layout.main')
@section('content')
<div class="card">
 
    <div class="card-header d-flex justify-content-between">
        <a href="#" class="{{ App\Models\Widget::where('kategori','agenda')->first() ?'btn btn-warning btn-sm':'btn btn-success btn-sm'}}" data-bs-toggle="modal" data-bs-target="{{ App\Models\Widget::where('kategori','agenda')->first() ?'#modal-edit':'#modal-widget'}}">{{ App\Models\Widget::where('kategori','agenda')->first() ?'Update widget':'+ Add Widget'}}</a>
        <a href="{{route('agenda.create')}}" class="btn btn-success ">Add Agendas</a>

 
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <table class="table table-bordered table-striped" id="table1">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari-Tanggal</th>
                <th>Kegiatan</th>
                <th>Lokasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($agendas as $item)
                
            
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->location}}</td>
                <td>
                  
                            <a href="{{route('agenda.edit', $item->id)}}">
                              <i class="badge-circle badge-circle-light-secondary text-success font-medium-1"
                                                    data-feather="edit"></i>  
                            </a> 
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modaldelete{{$item->id}}" >
                            <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                                    data-feather="trash"></i>
                            </a> 
                            @include('admin.page.agenda.destroy')
                </td>
            </tr>
            @endforeach
        </tbody>
       </table>

            
    </div>
    <!-- /.card-body -->
</div>
  <!-- /.card -->
  @include('admin.page.agenda.editwidget')
 @include('admin.page.agenda.widget')

@endsection


        