<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpage - {{$set->nm_skl}}</title>
    <link rel="shortcut icon" href="{{asset('storage/'.$set->logo)}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('dist/assets/compiled/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('dist/assets/compiled/css/app-dark.css')}}">
  <link rel="stylesheet" href="{{asset('dist/assets/compiled/css/iconly.css')}}">
  <link rel="stylesheet" href="{{asset('dist/assets/extensions/simple-datatables/style.css')}}">
  <link rel="stylesheet" href="{{asset('dist/assets/compiled/css/table-datatable.css')}}">
  <link rel="stylesheet" href="{{asset('dist/assets/extensions/summernote/summernote-lite.css')}}">
  <link rel="stylesheet" href="{{asset('dist/assets/compiled/css/form-editor-summernote.css')}}">

  @yield('css')
  
</head>
<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">