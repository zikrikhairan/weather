<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>List City - Weather with API MetaWeather</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" >
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{asset('css/list.css')}}" >
        <script>
            var position;
            var url_location = "{{url('location')}}";
            var url_weather = "{{url('weather')}}";
            var url_save = "{{url('save')}}";
            var url_image = "{{env('METAWEATHER_IMAGE')}}";
        </script>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{url('')}}">Weather</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dashboard
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('list')}}">List City</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <div class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Find Location" aria-label="Search" id="search">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="button" id="btn_search">Find</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="header">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">City</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data->saved_cities as $city)
                    <tr>
                        <th scope="row">{{$city->id}}</th>
                        <td>{{$city->city}}</td>
                        <td>{{date('d F Y', strtotime($city->created_at))}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        
        <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/home.js')}}"></script>
    </body>
</html>
