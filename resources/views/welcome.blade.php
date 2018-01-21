<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')
    <title>my-easysharing | Home </title>
</head>
<body>


@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif

<!-- Bild mit Buttons-->
<div class="parallax">
    <div class="container">
        <form action="{{ route('allgemeineSuche') }}" method="post">
            {{csrf_field()}}
            <div class="row">

                <div class="content">
                    <h1>Egal ob im Berufsalltag, in der Freizeit oder im Urlaub</h1>
                    <h2>Bei uns findest du immer was!</h2>
                </div>


                <div class="eingabefeld">
                    <div class="col-xs-10 col-sm-4 form-group searchPadding">
                        <div class="input-group">
                            <input id="searchCity1" name="search" type="text" class="form-control"
                                   placeholder="Postleitzahl oder Ort" autocomplete="off">
                            <span id="inputGpsBtn" class="input-group-btn">
                            <button id="buttonGPS2" type="button" class=" btn btn-basic ">
                            <span class="glyphicon glyphicon-map-marker"></span></button>
                        </span>
                        </div>
                        <ul id="liveSearch"></ul>
                    </div>
                    <div class="col-sm-3 form-group InputWithIcon changePaddingWelcome">
                        <input class="form-control" id="datevon1" type="text" name="von"
                               placeholder="Abholung">
                        <i id class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-3 form-group InputWithIcon changePaddingWelcome">
                        <input class="form-control" id="datebis1" type="text" name="bis"
                               placeholder="Rückgabe">
                        <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                    </div>

                    <div class="col-xs-2 col-sm-2 form-group searchBtnPaddingWelcome">
                        <button type="submit" id="buttonSearch1" class=" btn btn-basic">Suchen
                            <span class="glyphicon glyphicon-search"></span></button>
                    </div>

                </div>
            </div>
        </form>
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
            address: '{{$a->ort}},{{$a->postleitzahl}},{{$a->strasseNr}}'
        }, function (geocoderResults, status) {
            if (status === 'OK') {

                // map.setCenter(geocoderResults[0].geometry.location);

                var latlng = geocoderResults[0].geometry.location;
                //console.log(latlng.lat(), latlng.lng());
                var newMarker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(latlng.lat(), latlng.lng()),
                    icon: '/img/car.png',
                    title: "{{$a->strasseNr}}, {{$a->postleitzahl}} {{$a->ort}}"
                });
            }
        })
        @endforeach

        @foreach($fAdresses as $f)
        geocoder.geocode({
            address: '{{$f->ort}},{{$f->postleitzahl}},{{$f->strasseNr}}'
        }, function (geocoderResults, status) {
            if (status === 'OK') {

                // map.setCenter(geocoderResults[0].geometry.location);


                var latlng = geocoderResults[0].geometry.location;
                //console.log(latlng.lat(), latlng.lng());
                var newMarker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(latlng.lat(), latlng.lng()),
                    icon: '/img/bicycle.png',
                    title: "{{$f->strasseNr}}, {{$f->postleitzahl}} {{$f->ort}}"

                });
            }
        })
        @endforeach
    }

    navigator.geolocation.getCurrentPosition(function (position) {
        initialize(position.coords);
    }, function () {
        document.getElementById('googleMaps1').innerHTML = "Deine Position konnte leider nicht ermittelt werden";
    });


    /*function myMap() {
        var myCenter = new google.maps.LatLng(47.6724811, 9.1679752);
        var mapCanvas = document.getElementById("googleMap1");
        var mapOptions = {center: myCenter, zoom: 13};
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }*/
    $("#buttonGPS2").click(function () {
        $('html, body').animate({
            scrollTop: $("#googleMap1").offset().top
        }, 2000);

    })

    /* google.maps.event.addDomLoadEvent(window, "resize", function() {
         var center =new google.maps.LatLng(coords.latitude, coords.longitude);
         google.maps.event.trigger(map, "resize");
         map.setCenter(center);
     });*/
</script>
<script src="js/welcome.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwMqjnRKeOyaE7nTvPYtFpqaURd02ZpxE&callback=myMap&v=3.9"></script>

<a id="popuplink" href="#inline" style="display:none;"></a>
<div id="inline" style="display:none;text-align:center;">
    <p>Mit der Verwendung dieser Webseite und Nutzung unserer Dienste erklärst du dich damit einverstanden, dass wir Cookies verwenden. <a href="/cookie">Mehr erfahren.</a></p>
    <p><a href="javascript:;" onclick="jQuery.fancybox.close();" style="background-color:#333;padding:5px 10px;color:#fff;border-radius:5px;text-decoration:none;">Einverstanden</a></p>
</div>


<script>
    jQuery(document).ready(function () {
        function openFancybox() {
            setTimeout(function () {
                jQuery('#popuplink').trigger('click');
            }, 500);
        };
        var visited = jQuery.cookie('visited');
        if (visited == 'yes') {
            // second page load, cookie active
        } else {
            openFancybox(); // first page load, launch fancybox
        }
        jQuery.cookie('visited', 'yes', {
            expires: 365 // Anzahl der Tage die, die Cookies gültig sind
        });
        jQuery("#popuplink").fancybox({modal:true, maxWidth: 400, overlay : {closeClick : true}});
    });


</script>


@include('includes.footer')


</body>
</html>
