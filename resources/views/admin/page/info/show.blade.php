@extends('admin.layout.main')
@section('content')

    <!-- Main content -->
    <a href="#" onclick="history.back()" class="badge bg-light m-2"><< Back</a>
    <section class="card p-5">
        
        <div class="row">
            <div class="col-auto">
                <img class="img-fluid" src="{{asset('storage/'.$info->image)}}" alt="Photo" style="max-height: 160px;">
            </div>
            <div class="col px-4">
                <div>
                   
                       
                    <div class="float-right badge badge-warning"> Posted : {{$info->created_at}}</div>
                
                    <h3>{{$info->title}}</h3>
                   
                    <p class="mb-0">{!!$info->content!!}</p>
                </div>
                
            </div>
        </div>
        
    </section>
    
  @endsection