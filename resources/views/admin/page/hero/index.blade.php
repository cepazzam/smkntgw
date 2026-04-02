@extends('admin.layout.main')
@section('content')
<div class="card">
 
    <div class="card-header d-flex justify-content-between align-items-center">
      
            <h5>List of Heropage </h5>
            <div class="right">
            </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
       
            <table class="table"  id="table1" border="1">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Page</th>
                        <th>Url</th>
                        <th>Intro Text</th>
                        <th width="120">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($heroes as $item)
                        
                    
                    <tr>
                        <td><img src="{{asset('storage/'.$item->image)}}" alt="" width="60"></td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->url}}</td>
                        <td>{!!$item->content!!}</td>
                        <td>
                           
                             
                            <a href="#" data-bs-toggle="modal" data-bs-target="#herodelete{{$item->id}}" >
                            <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                                    data-feather="trash"></i>
                            </a> 
                           
                             @include('admin.page.hero.destroy')

                        </td>
                    </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
    </div>
@endsection
