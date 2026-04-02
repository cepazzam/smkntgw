@extends('admin.layout.main')
@section('content')
<div class="card">
  
    <div class="card-header d-flex justify-content-between">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-photo" class="btn btn-success btn-xs ">Add New Photo</a>
        @include('admin.page.photo.create')
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       <table class="table table-bordered"  id="table1">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Caption</th>
                        <th>Posted</th>
                        <th width="120">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($photos as $item)
                        
                    
                    <tr>
                        <td><img src="{{asset('storage/'.$item->image)}}" alt="" width="60" height="50"></td>
                        <td>{{$item->caption}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalshow{{$item->id}}" >
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
                     @include('admin.page.photo.destroy')
                     @include('admin.page.photo.edit')
                     @include('admin.page.photo.show')
                     @endforeach
                </tbody>


            </table>

        </div>
    </div>
    <!-- /.card-body -->
</div>
  <!-- /.card -->
 
@endsection


        