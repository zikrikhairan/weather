<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Weather with API MetaWeather</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" >
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{asset('css/home.css')}}" >
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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('')}}">Home
                        {{-- <span class="sr-only">(current)</span> --}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Type Your Location" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Find</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12 offset-lg-4 offset-md-4 offset-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 text-center today-weather">
                                        <h2><span id="">12</span>&#176;</h2>
                                        <h6><span>9</span>&#176; / <span>22</span>&#176;</h6>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-6 col-6 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid today-image">
                                        <p class="text-right">RealFeel&#8482;  11&#176;</p>
                                        <h1>Sunny</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11 offset-md-1">
                        <div class="col-md-6">
                            <i class="fas fa-wind"></i>
                            <span>Wind 29 km/h SE</span>&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-tint"></i>
                            <span>Rain 6,3 mm</span>&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-cloud"></i>
                            <span>Storm 20%</span>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-md-5">

                        </div>    
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 offset-lg-1 thumb">
                        <div class="card ">
                            <div class="card-header text-center">
                                <span id="weather[1][day]">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-6 col-sm-6 col-6 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid today-image">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 text-center forecasting-weather">
                                        <p>12&#176;</p>
                                        <p>9&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 thumb">
                        <div class="card">
                            <div class="card-header text-center">
                                <span id="weather[1][day]">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-6 col-sm-6 col-6 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid today-image">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 text-center forecasting-weather">
                                        <p>12&#176;</p>
                                        <p>9&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 thumb">
                        <div class="card">
                            <div class="card-header text-center">
                                <span id="weather[1][day]">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-6 col-sm-6 col-6 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid today-image">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 text-center forecasting-weather">
                                        <p>12&#176;</p>
                                        <p>9&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 thumb">
                        <div class="card">
                            <div class="card-header text-center">
                                <span id="weather[1][day]">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-6 col-sm-6 col-6 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid today-image">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 text-center forecasting-weather">
                                        <p>12&#176;</p>
                                        <p>9&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 thumb">
                        <div class="card">
                            <div class="card-header text-center">
                                <span id="weather[1][day]">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-6 col-sm-6 col-6 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid today-image">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 text-center forecasting-weather">
                                        <p>12&#176;</p>
                                        <p>9&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Bootstrap core JavaScript -->
        <script>
            // Note: This example requires that you consent to location sharing when
            // prompted by your browser. If you see the error "The Geolocation service
            // failed.", it means you probably did not give permission for the browser to
            // locate you.
            function initMap() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        console.log(pos);
                    }, function() {
                        
                    });
                } 
            }
        </script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs3DPAN9pcNR6CBFXolpNNrE7PIxpbiGA&callback=initMap">
        </script>
      
        <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script>
        $(document).ready(function(){
            
        });
        </script>
    </body>
</html>
