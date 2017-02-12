<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <title>Contacts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            /*html, body {*/
                /*background-color: #fff;*/
                /*color: #636b6f;*/
                /*font-family: 'Raleway', sans-serif;*/
                /*font-weight: 100;*/
                /*height: 100vh;*/
                /*margin: 0;*/
            /*}*/

            /*.full-height {*/
                /*height: 100vh;*/
            /*}*/

            /*.flex-center {*/
                /*align-items: center;*/
                /*display: flex;*/
                /*justify-content: center;*/
            /*}*/

            /*.position-ref {*/
                /*position: relative;*/
            /*}*/

            /*.top-right {*/
                /*position: absolute;*/
                /*right: 10px;*/
                /*top: 18px;*/
            /*}*/

            /*.content {*/
                /*text-align: center;*/
            /*}*/

            /*.title {*/
                /*font-size: 84px;*/
            /*}*/

            /*.links > a {*/
                /*color: #636b6f;*/
                /*padding: 0 25px;*/
                /*font-size: 12px;*/
                /*font-weight: 600;*/
                /*letter-spacing: .1rem;*/
                /*text-decoration: none;*/
                /*text-transform: uppercase;*/
            /*}*/

            /*.m-b-md {*/
                /*margin-bottom: 30px;*/
            /*}*/

             #map {
                 height: 400px;
                 width: 100%;
             }



            /* Add a dark background color with a little bit see-through */
            .navbar {
                margin-bottom: 0;
                background-color: #2d2d30;
                border: 0;
                font-size: 11px !important;
                letter-spacing: 4px;
                opacity:0.9;
            }

            /* Add a gray color to all navbar links */
            .navbar li a, .navbar .navbar-brand {
                color: #d5d5d5 !important;
            }

            /* On hover, the links will turn white */
            .navbar-nav li a:hover {
                color: #fff !important;
            }

            /* The active link */
            .navbar-nav li.active a {
                color: #fff !important;
                background-color:#29292c !important;
            }

            /* Remove border color from the collapsible button */
            .navbar-default .navbar-toggle {
                border-color: transparent;
            }

            /* Dropdown */
            .open .dropdown-toggle {
                color: #fff ;
                background-color: #555 !important;
            }

            /* Dropdown links */
            .dropdown-menu li a {
                color: #000 !important;
            }

            /* On hover, the dropdown links will turn red */
            .dropdown-menu li a:hover {
                background-color: red !important;
            }

            /*.container {*/
               /*position: relative;*/
                /*width: 50%;*/
            /*}*/
            .container {
                margin-top: 10%;
            }


            footer {
                background-color: #2d2d30;
                color: #f5f5f5;
                padding: 32px;
            }

            footer a {
                color: #f5f5f5;
            }

            footer a:hover {
                color: #777;
                text-decoration: none;
            }


        </style>
    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@if (Auth::check())--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ url('/login') }}">Login</a>--}}
                        {{--<a href="{{ url('/register') }}">Register</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--LARO4KA--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Documentation</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}







        <div class="container">
            <h3 class="text-center">Contact</h3>
            <p class="text-center"><em>We love our fans!</em></p>
            <div class="row test">
                <div class="col-md-4">
                    <p>Fan? Drop a note.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
                    <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#band">BAND</a></li>
                        <li><a href="#tour">TOUR</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Merchandise</a></li>
                                <li><a href="#">Extras</a></li>
                                <li><a href="#">Media</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>








        <h3>My Google Maps Demo</h3>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: -25.363, lng: 131.044};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOMmDQhRQe3aFhz1fBjaRkhHW7KMveM14&callback=initMap">
        </script>


        <footer class="text-center">
            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>LARO4KA made by<a href="@llo4ka.local" data-toggle="tooltip" title="Visit w3schools">&nbsp@llo4ka.local</a></p>
        </footer>


        <script>
            $(document).ready(function(){
                // Initialize Tooltip
                $('[data-toggle="tooltip"]').tooltip();
            })
        </script>




    </body>
</html>
