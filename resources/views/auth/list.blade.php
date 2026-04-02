 @extends('admin.layout.main')
 @section('content')
 <section class="section">
        <div class="row" id="table-bordered">
            
            <div class="col-5">
                
               
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add User</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{route('registrasipost')}}" method="post">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Full Name</label>
                                                <div class="position-relative">
                                                    <input type="text" name="name" value="{{old('name')}}" class="form-control"
                                                         id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                             <label for="first-name-icon">Role</label>
                                        <select class="form-control" name="is_role">
                                            <option value="" selected>select Role</option>
                                            <option {{old('is_role')=='0'?'selected':''}} value="0">User</option>
                                            <option {{old('is_role')=='1'?'selected':''}} value="1">Admin</option>
                                            <option {{old('is_role')=='2'?'selected':''}} value="2">Superadmin</option>
                                        </select>
                                    </div>
                                        <div class="col-12 mb-3">

                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon">Email</label>
                                                <div class="position-relative">
                                                    <input type="email" name="email" value="{{old('email')}}" class="form-control" 
                                                        id="email-id-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 mb-3">
                                            <div class="form-group has-icon-left">
                                                <label for="password-id-icon">Password</label>
                                                <div class="position-relative">
                                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                                        id="password-id-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group has-icon-left">
                                                <label for="password-id-icon">Confirm Password</label>
                                                <div class="position-relative">
                                                    <input type="password" name="confirm_password" class="form-control" 
                                                        id="password-id-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>            
            </div>   
            

            <div class="col-7">
               
                   
                        
                        <!-- table bordered -->
                        <div class="col-12">
                            <table class="table table-responsive table-bordered table-striped rounded-lg" >
                                <thead class="bg-info text-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        
                                   
                                    <tr>
                                        <td class="text-bold-500">{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td class="text-bold-500">{{ ($item->is_role == 1 ?'Administrator':'Superadmin')}}</td>
                                        <td>
                                       
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete{{$item->id}}">
                                            <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                                    data-feather="trash"></i>
                                        </a>
                                        @include('auth.destroy')
                                        </td>
                                    </tr>
                                     @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
           
        </div>
     
    </section>
   
    @endsection

