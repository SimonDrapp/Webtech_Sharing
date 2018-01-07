<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')
    <title>my-easysharing | Home </title>
</head>
<body>

@include('includes.header')

<!-- Bild mit Buttons-->
<div class="parallax">
<div class="container">
    <div class="row">
        <div class="col-12 search">

            <div class="content">
                <h1>Egal ob im Berufsalltag, in der Freizeit oder im Urlaub</h1>
                <h2>-</h2>
                <h1>Bei uns findest du immer was!</h1>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <input id="searchCity" type="text" class="form-control"
                               placeholder="Postleitzahl oder Ort">
                    </div>
                    <div class="form-group">
                        <button id="buttonGPS" type="button" class="form-group btn btn-basic">
                            <span class="glyphicon glyphicon-map-marker"></span></button>
                    </div>
                    <div class="form-group">
                        <input class="form-control visible-lg" id="datevon" type="text" name="datevon"
                               placeholder="DD/MM/YYYY">
                    </div>
                    <div class="form-group">
                        <button id="buttonVon" type="button" class="btn btn-basic visible-lg" name="datevon">
                            <span class="glyphicon glyphicon-calendar"></span></button>
                    </div>
                    <div class="form-group">
                        <input class="form-control visible-lg" id="datebis" type="text" name="datebis"
                               placeholder="DD/MM/YYYY">
                    </div>
                    <div class="form-group">
                        <button id="buttonBis" type="button" class="btn btn-basic visible-lg buttonS" name="datebis">
                            <span class="glyphicon glyphicon-calendar"></span></button>
                    </div>
                    <div class="form-group">
                        <a href="/allgemeineSuche">
                            <button id="buttonSearch" class=" btn btn-basic" type="button">Suchen
                                <span class="glyphicon glyphicon-search"></span></button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!--<script>
    $("#buttonGPS").click(function () {
        $('html, body').animate({
            scrollTop: $("#googleMap1").offset().top
        }, 2000);
    });
</script>-->

<article id="main">
    <section>

        <hr class="Trennlinie">
        <div class="Autoseite">
            <div class="col-md-7">
                <h2 class="AutoÜberschrift">Finde noch heute dein Traumauto.<br> <span class="text-muted">It'll blow your mind.</span>
                </h2>
                <p class="Autotext">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula
                    porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
                    dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <a href="/Ansicht/1">
                    <img class="AutoBild img-rounded" src="img/car1.jpg" data-src="holder.js/500x500/auto"
                         alt="Auto"></a>
            </div>

        </div>

        <div class="button1">
            <a href="/Ansicht">
                <button type="button" class="btn btn-basic" id="AutoButton">Zum Auto<span
                            class="glyphicon glyphicon-triangle-right"></span></button>
            </a>
        </div>
    </section>


    <section>


        <hr class="Trennlinie2">

        <div class="Fahrradseite">
            <div class="col-md-7">
                <h2 class="FahrradÜberschrift">Dein Fahrrad wartet schon auf dich. <br><span
                            class="text-muted">Sichere es dir jetzt!</span>
                </h2>
                <p class="Fahrradtext">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
                    ligula porta
                    felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                    Fusce
                    dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="FahrradBild img-rounded" src="img/bike1.jpg" data-src="holder.js/500x500/auto"
                     alt="Fahrrad">
            </div>
        </div>
        <div class="button2">
            <button type="button" class="btn btn-basic1 btn-responsive" id="FahrradButton">Zum Fahrrad<span
                        class="glyphicon glyphicon-triangle-right"></span></button>
        </div>

    </section>

</article>
<div id="sola">

</div>

<div class="container-fluid">

            <div id="googleMap1"></div>
            <script>
                function initialize(coords) {
                    var latlng = new google.maps.LatLng(coords.latitude, coords.longitude);
                    var myOptions = {
                        zoom: 13,
                        center: latlng
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap1"), myOptions);

                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map,
                        title: "Hier bist du :)"
                    });

                    var geocoder = new google.maps.Geocoder();


                    @foreach($aAdresses as $a)
                    geocoder.geocode({
                        address:'{{$a->ort}},{{$a->postleitzahl}},{{$a->strasseNr}}'
                    }, function(geocoderResults, status){
                        if(status === 'OK') {

                           // map.setCenter(geocoderResults[0].geometry.location);

                            let latlng = geocoderResults[0].geometry.location;
                            //console.log(latlng.lat(), latlng.lng());
                            let newMarker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(latlng.lat(), latlng.lng()),
                               icon: '/img/car.png'
                            });
                        }
                    })
                    @endforeach

                    @foreach($fAdresses as $f)
                    geocoder.geocode({
                        address:'{{$f->ort}},{{$f->postleitzahl}},{{$f->strasseNr}}'
                    }, function(geocoderResults, status){
                        if(status === 'OK') {

                            // map.setCenter(geocoderResults[0].geometry.location);

                            let latlng = geocoderResults[0].geometry.location;
                            //console.log(latlng.lat(), latlng.lng());
                            let newMarker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(latlng.lat(), latlng.lng()),
                                icon: '/img/bicycle.png'
                            });
                        }
                    })
                    @endforeach
                }

                navigator.geolocation.getCurrentPosition(function(position){
                    initialize(position.coords);
                }, function(){
                    document.getElementById('googleMaps1').innerHTML = 'Deine Position konnte leider nicht ermittelt werden';
                });

                navigator.geolocation.getCurrentPosition(function(position){
                    document.getElementById('sola').innerHTML = 'Latitude: '+position.coords.latitude+' / Longitude: '+position.coords.longitude;
                }, function(){
                    document.getElementById('sola').innerHTML = 'Deine Position konnte leider nicht ermittelt werden';
                });

                /*function myMap() {
                    var myCenter = new google.maps.LatLng(47.6724811, 9.1679752);
                    var mapCanvas = document.getElementById("googleMap1");
                    var mapOptions = {center: myCenter, zoom: 13};
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                }*/
                $("#buttonGPS").click(function () {
                    $('html, body').animate({
                        scrollTop: $("#googleMap1").offset().top
                    }, 2000);

                });
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwMqjnRKeOyaE7nTvPYtFpqaURd02ZpxE&callback=myMap&v=3.9"></script>

</div>

@include('includes.footer')


</body>
</html>
