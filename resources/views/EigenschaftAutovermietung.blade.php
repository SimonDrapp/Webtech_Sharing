<!DOCTYPE>
<html>
    <head>
        @include('includes.head')
        <title>my-easysharing | Autovermietung</title>
    </head>


    <body>
        @include('includes.header')
        <img class="HintergrundBildAutoeigenshaft" src="img/header1.jpg" alt="AutovermietungBild">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Marke</p>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="option"><a role="menu" tabindex="-1">Audi</a></li>
                                <li role="option"><a role="menu" tabindex="-1">BMW</a></li>
                                <li role="option"><a role="menu" tabindex="-1">Mercedes-Benz</a></li>
                                <li role="option"><a role="menu" tabindex="-1">Volkswagen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Modell</p>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                    <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                    <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                    <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                </ul>
                            </div>
                    </div>
                </div>


                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Autotyp</p>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Baujahr</p>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <div class="row">
                <form class="form-inline">
                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Kraftstoff</p>
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Auswählen
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                                <li role="option"><a role="menu" tabindex="-1">#</a></li>
                            </ul>
                    </div>
                </div>

                    <div class="col-xs-6 col-md-4">
                        <div class="buttonUndText">
                            <p class="TextBild">Bild</p>
                            <div class="form-group mx-sm-4">
                                <label for="inputBild" class="sr-only"></label>
                                <input class="form-control" id="inputBild">
                            </div>
                            <button id="buttonBild" type="button" class="form-group btn btn-basic">Öffnen
                                <span class="glyphicon glyphicon-picture"></span></button>
                        </div>
                    </div>
                </form>
                </div>
            </div>





        <div class="container-fluid">
            <div class="row">
                <form class="form-inline">
                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Details</p>
                            <div class="form-group2">
                                <textarea class="form-control detailsInput" rows="4" id="Details" placeholder="Details zum Auto ..."></textarea>
                            </div>
                    </div>
                </div>


                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndTextFuerPreis">
                        <p class="TextPreisProTag">Preis/T.</p>
                        <div class="form-group2 mx-sm-4">
                            <label for="inputPreis" class="sr-only"></label>
                            <input type="text" class="form-control" id="inputPreis">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>


        <div class="Verschieben">
        <div class="container-fluid">
            <div class="row">
                <form class="form-inline">
                    <div class="col-xs-6 col-md-4">
                        <div class="buttonUndText">
                            <p class="TextVon">Von</p>
                            <div class="form-group mx-sm-4">
                                <label for="inputVon" class="sr-only"></label>
                                <input placeholder="DD/MM/YYYY" class="form-control" id="inputVon">
                            </div>
                            <button id="buttonGPS" type="button" class="form-group btn btn-basic">
                                <span class="glyphicon glyphicon-calendar"></span></button>
                        </div>
                    </div>

                <div class="col-xs-6 col-md-4">
                        <div class="buttonUndText">
                            <p class="Text">Bis</p>
                            <div class="form-group mx-sm-4">
                                <label for="inputBis" class="sr-only"></label>
                                <input placeholder="DD/MM/YYYY" class="form-control" id="inputBis">
                            </div>
                            <button id="buttonGPS" type="button" class="form-group btn btn-basic">
                                <span class="glyphicon glyphicon-calendar"></span></button>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="buttonUndText">
                        <button type="button" class="btn btn-basic1 btn-responsive" id="MeldeAutoAn"><a href="#"></a>Melde mein Auto an<span
                                    class="glyphicon glyphicon-triangle-right"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        @include('includes.footer')
    </body>
</html>