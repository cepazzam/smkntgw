@extends('admin.layout.main')
@section('content')
<div class="card">
  
    <div class="card-header d-flex justify-content-between">
      <h5 class="card-title">{{$title}}</h5>

      <div class="btn btn-success btn-sm">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-video" class="btn btn-success ">Add New video</a>
        @include('admin.page.video.create')
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
     
       <table class="table table-bordered" id="table1">
        <thead>
          <tr>
            <th>Video</th>
            <th>Title</th>
            <th>Action</th>            
          </tr>
        </thead>
        <tbody>
          @foreach ($videos as $item)
              
          
          <tr>
            <td><iframe 
src="https://www.youtube.com/embed/{{ $item->embed }}"  height="120" frameborder="0" 
allowfullscreen ></iframe></td>
            <td>{{$item->title}}</td>
            <td> <a href="#" data-bs-toggle="modal" data-bs-target="#modalshow{{$item->id}}" >
                            <i class="badge-circle badge-circle-light-secondary text-primary font-medium-1"
                                                    data-feather="search"></i>
                            </a> 
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit{{$item->id}}" >
                            <i class="badge-circle badge-circle-light-secondary text-success font-medium-1"
                                                    data-feather="edit"></i>
                            </a> 
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modaldelete{{$item->id}}" >
                            <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                                    data-feather="trash"></i>
                            </a> 
                          </td>
          </tr>
             @include('admin.page.video.edit')
              @include('admin.page.video.destroy')
               @include('admin.page.video.show')
          @endforeach
        </tbody>

       </table>
    </div>
</div>


@endsection

        