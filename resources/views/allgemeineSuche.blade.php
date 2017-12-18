<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
        <title>my-easysharing | allgemeine Suche </title>
    </head>

    <body>
        @include('includes.header')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 search2">
                    <div class="row">
                        <div class="col-4  eingabefeld">
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


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"></div>

                <div class="col-xs-6 col-md-2">
                    <button type="button" class="btn btn-basic" id="btnFilter">Filter</button>
                </div>

                <div class="col-xs-6 col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="btnFilter" data-toggle="dropdown">Auswahl
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Auto</a></li>
                            <li><a href="#">Fahrrad</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-6 col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="btnFilter" data-toggle="dropdown">Sortierung
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Preis</a></li>
                            <li><a href="#">Umkreis</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        @include('includes.footer')
    </body>
</html>