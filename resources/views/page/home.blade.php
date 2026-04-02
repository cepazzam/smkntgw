@php
    $skl=App\Models\Sekolah::first();
@endphp
@extends('page.layout.main')
@section('content')

@include('page.component.hero')
@include('page.component.daftar')
@include('page.component.sambutan')
@include('page.component.multimedia')
@include('page.component.news')
<!-- Button trigger modal -->

@endsection
