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
@include('includes.header')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ asset('img/searchPictures/'.$vermietungen->autobild)}}" alt="Bild vom Auto1">
        </div>
        <div class="item">
            <img src="{{asset('img/header1.jpg')}}" alt="Bild vom Auto2">
        </div>
        <div class="item">
            <img src="{{asset('img/car2.jpg')}}" alt="Bild vom Auto3">

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
            <p>{{$vermietungen->automarke}}<br><br></p>
            <p><b>Modell:</b></p>
            <p>{{$vermietungen->automodell}}<br><br></p>
            <p><b>Autofarbe:</b></p>
            <p>{{$vermietungen->autofarbe}}<br><br></p>
            <p><b>Kraftstoff:</b></p>
            <p>{{$vermietungen->autokraftstoff}}<br><br></p>
            <p><b>Baujahr:</b></p>
            <p>{{$vermietungen->autobaujahr}}<br><br></p>
            <p><b>Details:</b></p>
            <p>{{$vermietungen->autodetails}}<br><br></p>
            <p><b>Preis pro Tag:</b></p>
            <p>{{$vermietungen->autopreis}} €<br><br></p>
            <p><b>Standort:</b><br></p>
            <p>{{$vermietungen-> autostrasseNr}}, {{$vermietungen-> autopostleitzahl}} {{$vermietungen-> autoort}}</p>
        </div>

        <div class="col-md-4 col-lg-6">
            <div id="googleMap"></div>
            <script>
                function myMap(coords) {
                    var latlng = new google.maps.LatLng(coords.latitude, coords.longitude);
                    var myOptions = {
                        zoom: 15,
                        center: latlng
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), myOptions);

                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map,
                        title: "Hier bist du :)"
                    });

                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({
                        address: '{{$vermietungen->autoort}},{{$vermietungen->autopostleitzahl}},{{$vermietungen->autostrasseNr}}'
                    }, function (geocoderResults, status) {
                        if (status === 'OK') {
                            var latlng = geocoderResults[0].geometry.location;
                            var newMarker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(latlng.lat(), latlng.lng()),
                                icon: '/img/car.png',
                                title: "{{$vermietungen->autostrasseNr}}, {{$vermietungen->autopostleitzahl}} {{$vermietungen->autoort}}"
                            });
                        }
                    })
                }

                navigator.geolocation.getCurrentPosition(function (position) {
                    myMap(position.coords);
                }, function () {
                    document.getElementById('googleMap').innerHTML = 'Deine Position konnte leider nicht ermittelt werden';
                });
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
