<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"  content="{{$skl->nm_skl}}"/>
    <meta name="keywords"  content="smk, smkn tegalwaru, purwakarta, desain komunikasi visual, kampung ilmu"  />
    <meta name="author" content="{{$skl->nm_skl}}" />
    <title>{{$skl->nm_skl}}</title>
    <link rel="shortcut icon" href="{{asset('storage/'.$skl->logo)}}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900" rel="stylesheet"type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="{{asset('assets/fonts/iconfont/material-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}"rel="stylesheet"/>
    <link href="{{asset('assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/materialize/css/materialize.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/shortcodes/shortcodes.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/skins/corporate.css')}}" rel="stylesheet" />
    
    @yield('css')
  </head>
<body id="top" class="has-header-search">