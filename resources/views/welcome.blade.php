<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            footer{
                position: fixed;
                width: 100%;
                bottom: 0px;
                left: 0px;
                height: 50px;
            }
            .heart , .star{
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand font-weight-bold text-white" href="{{ url('/') }}">
                   {{ config('app.name', 'MultiAuth') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav ml-auto text-white">
                        <!-- Authentication Links -->
                        @if (Route::has('login'))
                            @auth
                           <li class="nav-item">
                                <a href="{{ url('/home') }}" class="text-white font-weight-bold">Home</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-white" href="{{ route('login') }}">Login</a>
                            </li>
                                @if (Route::has('register'))
                                    <li class="nav-item ml-2">
                                        <a class="nav-link font-weight-bold text-white" href="{{ route('register') }}">
                                        {{ __('Register') }}</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row justify-content-center mt-2">
                <div class="col-md-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                            <li data-target="#demo" data-slide-to="4"></li>
                            <li data-target="#demo" data-slide-to="5"></li>
                        </ul>

                          <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="../img/bml.png" alt="Los Angeles" width="100%" height="500">
                            </div>
                            <div class="carousel-item">
                              <img src="../img/lm1.jpeg" alt="Los Angeles" width="100%" height="500">
                            </div>
                            <div class="carousel-item">
                              <img src="../img/lma.png" alt="Los Angeles" width="100%" height="500">
                            </div>
                            <div class="carousel-item">
                              <img src="../img/lmaa.jpeg" alt="Chicago" width="100%" height="500">
                            </div>
                            
                        </div>

                          <!-- Left and right controls -->
                          <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                          </a>
                        </div>
                    </div>
            </div>
            
            @foreach($data as $row)
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-3">
                        <div class="card shadow border-0">
                          <div class="view overlay">
                            <img class="card-img-top" src="img/{{ $row->image }}" alt="Card image cap">
                            <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                          <div class="card-body">
                            <h4 class="card-title">{{ $row->title }}</h4>
                            <p class="card-text"> {{ $row->body }}</p>
                            <div class="row mb-3">
                                <div class="col-md-4 text-danger">
                                    <i class="fas fa-heart heart"></i> 21
                                </div>
                                <div class="col-md-8 text-right text-primary">
                                    345 <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star-half-alt star"></i>
                                </div>
                            </div>
                            <a href="view_more/{{$row->id}}" class="btn btn-primary btn-block font-weight-bold">View More</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow border-0">
                          <div class="view overlay">
                            <img class="card-img-top" src="img/{{ $row->image }}" alt="Card image cap">
                            <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                          <div class="card-body">
                            <h4 class="card-title">{{ $row->title }}</h4>
                            <p class="card-text">{{ $row->body }}</p>
                            <div class="row mb-3">
                                <div class="col-md-4 text-danger">
                                    <i class="fas fa-heart heart"></i> 21
                                </div>
                                <div class="col-md-8 text-right text-primary">
                                    345 <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star-half-alt star"></i>
                                </div>
                            </div>
                            <a href="view_more/{{$row->id}}" class="btn btn-primary btn-block font-weight-bold">View More</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow border-0">
                          <div class="view overlay">
                            <img class="card-img-top" src="img/{{ $row->image }}"alt="Card image cap">
                            <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                          <div class="card-body">
                            <h4 class="card-title">{{ $row->title }}</h4>
                            <p class="card-text">{{ $row->body }}</p>
                            <div class="row mb-3">
                                <div class="col-md-4 text-danger">
                                    <i class="fas fa-heart heart"></i> 21
                                </div>
                                <div class="col-md-8 text-right text-primary">
                                    345 <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star-half-alt star"></i>
                                </div>
                            </div>
                            <a href="view_more/{{$row->id}}" class="btn btn-primary btn-block font-weight-bold">View More</a>
                          </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <footer class="shadow-lg bg-success">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 shadow-lg">
                            <h4 class="text-center text-white">Allrights &copy;2020, Design By Kishan Maurya </h4>
                        </div>
                    </div>
                </div>
            </footer>
    </body>
</html>
