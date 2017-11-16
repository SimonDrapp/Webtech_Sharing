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
            <div class="col-12 col-m-12 search">

                <div class="content">
                    <h1>Egal ob im Berufsalltag, in der Freizeit oder im Urlaub</h1>
                    <h2>-</h2>
                    <h1>Bei uns findest du immer was!</h1>
                </div>

                <div class="container">
                    <div class="col-xs-2 col-sm-5 col-lg-4 aligns">
                        <div class="form-group">
                            <input id="searchCity" type="text" class="form-control searchCity"
                                   placeholder="Postleitzahl oder Ort">
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-lg-1 aligns1">
                        <div class="form-group">
                            <button id="buttonGPS" type="button" class="form-group btn btn-basic buttonGPS">
                                <span class="glyphicon glyphicon-map-marker"></span></button>
                        </div>
                    </div>
                    <div class="col-lg-2 aligns2">
                        <div class="form-group">
                            <input class="form-control visible-lg" id="datevon" type="text" name="date"
                                   placeholder="DD/MM/YYYY">
                        </div>
                    </div>
                    <div class="col-lg-1 aligns3">
                        <div class="form-group">
                            <button id="buttonVon" type="button" class="btn btn-basic buttonvon visible-lg">
                                <span class="glyphicon glyphicon-calendar"></span></button>
                        </div>
                    </div>
                    <div class="col-lg-2 aligns4">
                        <div class="form-group">
                            <input class="form-control visible-lg" id="datebis" type="text" name="date"
                                   placeholder="DD/MM/YYYY">
                        </div>
                    </div>
                    <div class="col-lg-1 aligns5">
                        <div class="form-group">

                            <button id="buttonBis" type="button" class="btn btn-basic buttonbis visible-lg">
                                <span class="glyphicon glyphicon-calendar"></span></button>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-lg-1 aligns6">
                        <div class="form-group">
                            <button id="buttonSearch" class=" btn btn-basic buttonsearch" type="button">Suchen
                                <span class="glyphicon glyphicon-search"></span></button>
                            <!--  <div class="col-xs-6 col-sm-6 col-lg-7 align2">
                                  <div class="form-group>">-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="col-xs-6 col-sm-6 col-lg-6 align2">
             <form class="form-inline">-->
    </div>



    <article id="main">

        <section>

            <hr class="Trennlinie">
            <div class="Autoseite">
                <div class="col-md-7">
                    <h2 class="AutoÜberschrift">Finde noch heute dein Traumauto.<br> <span class="text-muted">It'll blow your mind.</span>
                    </h2>
                    <p class="Autotext">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="AutoBild img-rounded" src="img/car1.jpg" data-src="holder.js/500x500/auto" alt="Auto">
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
                    <h2 class="FahrradÜberschrift">Dein Fahrrad wartet schon auf dich. <br><span class="text-muted">Sichere es dir jetzt!</span>
                    </h2>
                    <p class="Fahrradtext">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                        felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce
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

    @include('includes.footer')

    <!-- contact form -->
    @include('includes.Kontakt')

    </body>
</html>
