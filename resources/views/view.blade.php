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
                font-size: 35px;
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
            <div class="row">
                <div class="col-md-12 text-left mt-2 mr-5">
                    <a href="{{url()->previous()}}" class="font-weight-bold mt-5" title="Back link">
                        <i class="fas fa-arrow-circle-left display-4 text-success fixed-top mt-5"></i>
                    </a>
                </div>
            </div>
            @foreach($data as $row)
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-8">
                        <div class="card shadow border-0">
                          <div class="view overlay">
                        <img class="card-img-top" src="/img/{{ $row->image }}" alt="Card image cap" height="300px">
                            <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                          <div class="card-body">
                            <h4 class="card-title">{{ $row->title }}</h4>
                            <p class="card-text"> {{ $row->body }}</p>
                            <div class="row">
                                <div class="col-md-6 text-danger">
                                    <i class="fas fa-heart heart"></i> 21
                                </div>
                                <div class="col-md-6 text-right text-primary">
                                    345 <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star star"></i>
                                    <i class="fas fa-star-half-alt star"></i>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                </div>
            @endforeach
            <div class="row justify-content-around mt-5 mb-5">
                <div class="col-md-6">
                    <div class="card shadow border-0 mb-5">
                        <div class="card-header text-dark bg-white">
                            <h4 class="card-title font-weight-bold">Add Comment</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <label for="" class="font-weight-bold text-dark">Name:</label>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name..." title="Enter Commenter Name.." required>
                                </div>
                                <label for="" class="text-dark font-weight-bold">Comment:</label>
                                <div class="form-group">
                                    <textarea name="comment" id="" cols="30" rows="3" class="form-control" placeholder="Enter comment.." title="Comment Details ..." required></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-success font-weight-bold">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right mt-2 mr-5">
                    <a href="{{url()->previous()}}" class="font-weight-bold mt-5" title="Back link">
                        <i class="fas fa-arrow-circle-left display-4 text-success fixed-bottom mb-5"></i>
                    </a>
                </div>
            </div>
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
