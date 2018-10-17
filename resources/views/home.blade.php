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
            <div class="container-fluid">
                    <img class="ray" src="{{asset('assets/images/ray.png')}}">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12 offset-lg-4 offset-md-4 offset-sm-3">
                        <div class="card card-today">
                            <div class="card-header text-center">
                                <h3 name="city">Jakarta</h3>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center today-weather">
                                        <h2><span name="weather[0][the_temp]" class="the-temp white">12</span><span class="white">&#176;</span></h2>
                                        <h6 class="white"><span name="weather[0][min_temp]" class="min-temp blue">9</span><span class="blue">&#176;</span> / <span name="weather[0][max_temp]" class="max-temp orange">22&#176;</span><span class="orange">&#176;</span></h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid today-image" name="weather[0][image]">
                                        {{-- <p class="text-right">RealFeel&#8482;  11&#176;</p> --}}
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <h2 name="weather[0][weather_state_name]" class="blue">Sunny</h2>
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
                            <span class="blue">Wind </span> <span name="weather[wind_speed]" class="white"> - </span> <span class="white"> mph</span>&nbsp;&nbsp;&nbsp;
                            {{-- <i class="fas fa-tint"></i>
                            <span>Rain 6,3 mm</span>&nbsp;&nbsp;&nbsp;
                            <i class="fas fa-cloud"></i>
                            <span>Storm 20%</span>&nbsp;&nbsp;&nbsp; --}}
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
                                <span name="weather[1][day]" class="blue">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid weather-image" name="weather[1][image]">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center forecasting-weather" >
                                        <p class="max-temp orange"><span name="weather[1][max_temp]" >12</span>&#176;</p>
                                        <p class="blue"><span name="weather[1][min_temp]">9</span>&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 thumb">
                        <div class="card">
                            <div class="card-header text-center">
                                <span name="weather[2][day]" class="blue">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid weather-image" name="weather[2][image]">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center forecasting-weather">
                                        <p class="max-temp orange"><span name="weather[2][max_temp]">12</span>&#176;</p>
                                        <p class="blue"><span name="weather[2][min_temp]">9</span>&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 thumb">
                        <div class="card">
                            <div class="card-header text-center">
                                <span name="weather[3][day]" class="blue">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid weather-image" name="weather[3][image]">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center forecasting-weather">
                                        <p class="max-temp orange"><span name="weather[3][max_temp]">12</span>&#176;</p>
                                        <p class="blue"><span name="weather[3][min_temp]">9</span>&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 thumb">
                        <div class="card">
                            <div class="card-header text-center">
                                <span name="weather[4][day]" class="blue">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid weather-image" name="weather[4][image]">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center forecasting-weather">
                                        <p class="max-temp orange"><span name="weather[4][max_temp]">12</span>&#176;</p>
                                        <p class="blue"><span name="weather[4][min_temp]">9</span>&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 thumb">
                        <div class="card">
                            <div class="card-header text-center">
                                <span name="weather[5][day]" class="blue">Thursday</span>
                            </div>
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                                        <img src="https://www.metaweather.com/static/img/weather/png/c.png" alt="" class="img-fluid weather-image" name="weather[5][image]">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center forecasting-weather">
                                        <p class="max-temp orange"><span name="weather[5][max_temp]">12</span>&#176;</p>
                                        <p class="blue"><span name="weather[5][min_temp]">9</span>&#176;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal"></div>
        <!-- Bootstrap core JavaScript -->
        <script>
            // Note: This example requires that you consent to location sharing when
            // prompted by your browser. If you see the error "The Geolocation service
            // failed.", it means you probably did not give permission for the browser to
            // locate you.
            function initMap() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        position = pos;
                    }, function() {
                        handleLocationError(true);
                    });
                } 
                else {
          // Browser doesn't support Geolocation
          handleLocationError(false);
        }
      }

      function handleLocationError(browserHasGeolocation) {
          alert("Geolocation support for HTTPS Website")
      }

        </script>
        {{-- <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs3DPAN9pcNR6CBFXolpNNrE7PIxpbiGA&callback=initMap">
        </script> --}}
      
        <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/home.js')}}"></script>
        <script>
        $(document).ready(function(){
            if(position){
                weather_by_lat_long(position['lat'], position['lng']);
            }
            else{
                weather_by_city("Jakarta");
            }
            $("#search").keypress(function(e) {
                if(e.which == 13){
                    find_city($(this).val());
                }
            });
            $("#btn_search").click(function(){
                find_city($("#search").val());
            });
        });
        </script>
    </body>
</html>
