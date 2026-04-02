@php
    $skl=App\Models\Sekolah::first();
@endphp

@include('page.layout.header')
@include('page.layout.topbar')
@include('page.layout.navbar')
@yield('content')
@include('page.layout.footer')

