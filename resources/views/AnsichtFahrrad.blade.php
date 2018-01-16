<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Media.css')}}">
    <link rel="icon" href="{{ asset('img/logo_new.png')}}">
    <title>my-easysharing | Ansicht</title>
</head>
<body>

@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{asset('img/bike1.jpg')}}" alt="Bild vom Fahrrad1">
            <div class="carousel-caption">
                <h10>Einfach so!</h10>
                <p>It's always a fun to make this f*** page</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('img/header2.jpg')}}" alt="Bild vom Fahrrad2">
            <div class="carousel-caption">
                <h10>Einfach so ein zweites Bild!</h10>
                <p>It's always a lot shit to make this f*** page</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('img/car2.jpg')}}" alt="Fahrrad vom Auto3">
            <div class="carousel-caption">
                <h10>Einfach so nochmaaaal!</h10>
                <p>It's always a fuck to make this f*** page</p>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-12 lol">
            <div class="form-group">
                <input class="form-control" id="datevon2" type="text" name="date"
                       placeholder="DD/MM/YYYY">
            </div>
            <div class="form-group">
                <button id="buttonVon2" type="button" class="btn btn-basic">
                    <span class="glyphicon glyphicon-calendar"></span></button>
            </div>
            <div class="form-group">
                <input class="form-control" id="datebis2" type="text" name="date"
                       placeholder="DD/MM/YYYY">
            </div>
            <div class="form-group">
                <button id="buttonBis2" type="button" class="btn btn-basic">
                    <span class="glyphicon glyphicon-calendar"></span></button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-6 eigenschaft">
            <p><b>Marke:</b></p>
            <p><br><br></p>
            <p><b>Modell:</b></p>
            <p><br><br></p>
            <p><b>Fahrradfarbe:</b></p>
            <p><br><br></p>
            <p><b>Fahrradart:</b></p>
            <p><br><br></p>
            <p><b>Details:</b></p>
            <p><br><br></p>
            <p><b>Preis pro Tag:</b></p>
            <p><br><br></p>
            <p><b>Standort:</b><br></p>
            <p></p>
        </div>
        <div class="col-md-4 col-lg-6">
            <div id="googleMap"></div>
            <script>
                function myMap() {
                    var myCenter = new google.maps.LatLng(47.6724811, 9.1679752);
                    var mapCanvas = document.getElementById("googleMap");
                    var mapOptions = {center: myCenter, zoom: 15};
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker({
                        position: myCenter,
                        title: "Hindenburgstraße 9"
                    });
                    marker.setMap(map);
                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwMqjnRKeOyaE7nTvPYtFpqaURd02ZpxE&callback=myMap&v=3.9"></script>
        </div>
    </div>
</div>

<div class="container btRent">
    <a href="/Bezahlen">
        <button id="btMieten" class=" btn btn-basic" type="button">Mieten</button>
    </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-4">
            <p id="kon">Anbieter kontaktieren:</p>
        </div>
        <div class="col-md-2 col-lg-6">
            <input id="AnsichtBetreff" type="text" placeholder="Betreff">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <textarea id="areaKontakt" rows="6" cols="50" name="comment" form="usrform"
                      placeholder="Die Fragen.."></textarea>
        </div>
        <div class="col-md-2 col-lg-2">
            <button id="btAnliegen" class=" btn btn-basic" type="button">Abschicken</button>
        </div>
    </div>
</div>


@include('includes.footer')
</body>
</html>
