<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')
    <title>my-easysharing | Home </title>
</head>
<body>

@include('includes.header')

<!-- Bild mit Buttons-->
<div class="container-fluid">
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
                        <button id="buttonGPS" type="button" class="form-group btn btn-basic ">
                            <span class="glyphicon glyphicon-map-marker"></span></button>
                    </div>
                    <div class="form-group">
                        <input class="form-control visible-lg" id="datevon" type="text" name="date"
                               placeholder="DD/MM/YYYY">
                    </div>
                    <div class="form-group">
                        <button id="buttonVon" type="button" class="btn btn-basic visible-lg">
                            <span class="glyphicon glyphicon-calendar"></span></button>
                    </div>
                    <div class="form-group">
                        <input class="form-control visible-lg" id="datebis" type="text" name="date"
                               placeholder="DD/MM/YYYY">
                    </div>
                    <div class="form-group">
                        <button id="buttonBis" type="button" class="btn btn-basic visible-lg">
                            <span class="glyphicon glyphicon-calendar"></span></button>
                    </div>
                    <div class="form-group">
                        <a href="/allgemeineSuche" >
                        <button id="buttonSearch" class=" btn btn-basic " type="button">Suchen
                            <span class="glyphicon glyphicon-search"></span></button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

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
                            <a href="/Ansicht" >
                            <img class="AutoBild img-rounded" src="img/car1.jpg" data-src="holder.js/500x500/auto"
                                 alt="Auto"></a>
                        </div>

                    </div>

                    <div class="button1">
                        <button type="button" class="btn btn-basic" id="AutoButton">Zum Auto<span
                                    class="glyphicon glyphicon-triangle-right"></span></button>
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

<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-6">
            <div id="googleMap"></div>
            <script>
                function myMap() {
                    var myCenter= new google.maps.LatLng(47.6724811,9.1679752);
                    var mapCanvas= document.getElementById("googleMap");
                    var mapOptions={center: myCenter, zoom:13};
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwMqjnRKeOyaE7nTvPYtFpqaURd02ZpxE&callback=myMap&v=3.9"></script>
        </div>
    </div>
</div>

@include('includes.footer')


</body>
</html>
