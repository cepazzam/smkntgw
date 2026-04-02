@extends('admin.layout.main')
@section('content')
<div class="card">
     <div class="card-header d-flex justify-content-between">
        <a href="{{route('post.create')}}" class="btn btn-success ">Add News</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<table class="table table-bordered"  id="table1">
                <thead class="bg-light text-dark">
                    <tr>
                        <th class="text-dark">Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th width="120">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($posts as $item)
                        
                    
                    <tr>
                        <td width="90"><img src="{{asset('storage/'.$item->image)}}" alt="" width="60" height="50"></td>
                        <td>{{Str::words($item->title,10,'...')}}</td>
                        <td width="120">{{$item->category->name}}</td>
                         <td>
                         
                          @switch($item->status)
                            @case('0')<a href="" class="badge bg-warning p-1 px-3 rounded-pill">{{'Draft'}}</a>                            
                            @break
                            @case('1')<a href="" class="badge bg-success p-1 px-3 rounded-pill">{{'Posted'}}</a>                             
                            @break                          
                            @default <a href="" class="badge bg-secondary p-1 px-3 rounded-pill">{{'archive'}}</a>                               
                          @endswitch
                        
                        </td>
                        <td>
                            <a href="{{route('post.show', $item->id)}}">
                                <i class="badge-circle badge-circle-light-secondary text-primary font-medium-1"
                                                    data-feather="search"></i>
                                
                            </a> 
                            <a href="{{route('post.edit', $item->id)}}">
                              <i class="badge-circle badge-circle-light-secondary text-success font-medium-1"
                                                    data-feather="edit"></i>  
                            </a> 
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete{{$item->id}}" >
                            <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                                    data-feather="trash"></i>
                            </a> 
                           @include('admin.page.berita.destroy')

                        </td>
                    </tr>
                    @endforeach
                </tbody>


            </table>
      

            
    </div>
    <!-- /.card-body -->
</div>
@endsection

        