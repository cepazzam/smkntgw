 @extends('admin.layout.main')
 @section('content')
 <section class="section">
        <div class="row" id="table-bordered">
            
            <div class="col-8">
                
               
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title mb-0">Add Category</h4>
                        <a href="{{route('post.create')}}" class="btn btn-success btn-sm">Create News post</a>

                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Category Name</label>
                                                <div class="d-flex">
                                            <input type="text" name="name" value="{{old('name')}}" class="form-control rounded-0">
                                            <button type="submit" class="btn btn-primary rounded-0">Add</button>
 
                                                </div>
                                            </div>
                                        </div>  
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive p-3 col-12 overflow-y-scroll" style="height:300px">
                            <table class="table" id="table1"> 
                                <thead class="bg-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php
                                    $no=1;
                                  @endphp
                                    @foreach ($categories as $item)
                                    <tr>
                                       <td>{{$no++}}</td>
                                        <td class="text-bold-500">{{$item->name}}</td>                                       
                                        <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editcategory{{$item->id}}">
                                            <i class="badge-circle badge-circle-light-secondary text-success font-medium-1"
                                                    data-feather="edit"></i>
                                        </a>
                                       
                                        </td>
                                    </tr>
                                     @include('admin.page.berita.kategori.edit')
                                     @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                </div>            
            
                
              </div>  
           
        </div>
     
    </section>
   
    @endsection

