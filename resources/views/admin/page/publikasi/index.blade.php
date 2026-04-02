@extends('admin.layout.main')
@section('content')
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5>
                @switch($kategori)
                    @case('artikel')
                        {{ 'Artikel' }}
                    @break

                    @case('pengumuman')
                        {{ 'Penguman' }}
                    @break

                    @case('hubinmas')
                        {{ 'Sambutan' }}
                    @break

                    @default
                @endswitch

            </h5>
            <div class="right">
                 <a href="{{ route('publikasi-create', $kategori) }}" class="btn btn-success btn-sm">+ Add
                    {{ $kategori }}</a>

            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">


            <table class="table table-bordered" id="table1">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th width="120">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($publish as $item)
                        <tr>
                            <td><img src="{{ asset('storage/' . $item->image) }}" alt="" width="60"></td>
                            <td>{{ $item->title }}</td>
                            <td>{!! Str::limit($item->content, '50', '...') !!}</td>
                            <td>
                                <a href="{{ route('publikasi.show', $item->id) }}">
                                    <i class="badge-circle badge-circle-light-secondary text-primary font-medium-1"
                                        data-feather="search"></i>

                                </a>
                                <a href="{{ route('publikasi.edit', $item->id) }}">
                                    <i class="badge-circle badge-circle-light-secondary text-success font-medium-1"
                                        data-feather="edit"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete{{ $item->id }}">
                                    <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                        data-feather="trash"></i>
                                </a>
                                @include('admin.page.publikasi.destroy')

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
  
@endsection
