@extends('admin.layout.main')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{route('agenda.index')}}" class="btn btn-success btn-sm">list agenda</a>
    </div>
    <div class="card-body">
        <form action="{{route('agenda.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="agenda">Title</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="agenda">lokasi</label>
                    <input type="text" name="location" class="form-control" value="{{old('location')}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="agenda">Tanggal</label>
                    <input type="date" name="date" class="form-control" value="{{old('location')}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="agenda">Content</label>
                    <textarea name="content" id="summernote" class="form-control">

                    </textarea>
                </div>
            </div>

        
    </div>
    <div class="card-footer">
        <button class="btn btn-success" type="submit">Save</button>
        <button class="btn btn-danger" type="reset">Reset</button>

    </div>
    </form>
</div>

@endsection
