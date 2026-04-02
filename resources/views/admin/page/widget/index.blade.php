@extends('admin.layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      
            <h5>List of Widgets </h5>
            <div class="right">
            </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
       
            <table class="table table-bordered" id="table1">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Page</th>
                        <th>Url</th>
                        <th width="120">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($widgets as $item)
                        
                    
                    <tr>
                        <td><img src="{{asset('storage/'.$item->image)}}" alt="" width="60"></td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->url}}</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#widgetdelete{{$item->id}}" >
                            <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                                    data-feather="trash"></i>
                            </a> 
                            @include('admin.page.widget.destroy')

                        </td>
                    </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
    </div>

@endsection
