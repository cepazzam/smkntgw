@extends('admin.layout.main')
@section('content')

    <!-- Main content -->
    <a href="{{route('post.index')}}" class="btn btn-xs btn-warning mb-2"><i class="fas fa-undo"></i> Back</a>
    <section class="card p-5">
        
        <div class="row">
            
            <div class="col px-4">
                <div>
                   
                       
                    <div class="float-right badge badge-warning"> Posted : {{$post->created_at}}</div>
                
                    <h3>{{$post->title}}</h3>
                      <img class="img-responsive w-100" src="{{asset('storage/'.$post->image)}}" alt="Photo">
                    <p class="mb-0">{!!$post->content!!}</p>
                </div>
                <div class="mt-5">
                    
                        <button class="btn btn-outline-info">Category :{{$post->category->name}}</button>
                        <button class="btn btn-outline-success">
                        @switch($post->status)
                            @case('0')Stataus :<a href="#" class="badge bg-warning px-3 rounded-pill"> {{'Draft'}}</a>                            
                            @break
                            @case('1')<a href="" class="badge bg-success p-2 px-3 rounded-pill">{{'Posted'}}</a>                             
                            @break                          
                            @default <a href="" class="badge bg-dark p-2 px-3 rounded-pill">{{'Archive'}}</a>                             
                          @endswitch
                         </button>
                
                    
                </div>
            </div>
        </div>
    </section>
  @endsection