
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$skl->nm_skl}} - {{$title}}</title>
    <link rel="shortcut icon" href="{{asset('storage/'.$skl->logo)}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('assets/compiled/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('assets/compiled/css/app-dark.css')}}">
  <link rel="stylesheet" href="{{asset('assets/compiled/css/auth.css')}}">
</head>

<body>
    <script src="{{asset('assets/static/js/initTheme.js')}}"></script>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
            @if(App\Models\Sekolah::first()->logoweb=='')
            <img src="{{asset('assets/img/idea.jpg') }}" width="200" alt="">
              @else
              <img src="{{asset('storage/'. App\Models\Sekolah::first()->logoweb)}}" class="img-responsive w-100 h-100 rounded-pill">
              @endif

            </div>
            <h1 class="auth-title">Log in.</h1>
            @session('info')
            <div class="alert alert-danger text-center">
            {{$value}}
            </div>
            @endsession

            <form action="{{route('loginpost')}}" method="post">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" name="email" value="{{old('email')}}" class="form-control form-control-xl" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
            
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right" class="text-center pt-5 align-items-center" style="background:url({{asset('storage/'.App\Models\Sekolah::first()->banner)}}); background-size:cover">
            <img src="{{asset('storage/'.App\Models\Sekolah::first()->logo)}}" width="120" alt="">
            {!!App\Models\Sekolah::first()->tagline!!}
        </div>
    </div>
</div>

    </div>
</body>

</html>