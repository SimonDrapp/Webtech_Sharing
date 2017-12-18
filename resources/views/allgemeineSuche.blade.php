<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
        <title>my-easysharing | allgemeine Suche </title>



    </head>

    <body>
        @include('includes.header')

        <div class="container">
            <div class="row">
                <div class="col-12">
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
                            <div class="form-group InputWithIcon">
                                <input class="form-control visible-lg" id="datevon" type="text" name="date"
                                       placeholder="DD/MM/YYYY">
                                <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                            </div>
                            <div class="form-group InputWithIcon">
                                <input class="form-control visible-lg" id="datebis" type="text" name="date"
                                       placeholder="DD/MM/YYYY">
                                <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
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

        <div class="container">
            <div class="row">
                <div class="col-xs-9">
                    <div class="myBtnContainer">
                        <button class="btn active" onclick="filterSelection('all')"> alle anzeigen</button>
                        <button class="btn" onclick="filterSelection('cars')"> Autos</button>
                        <button class="btn" onclick="filterSelection('animals')"> Fahrräder</button>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="myBtnContainer">
                        <button class="btn active" onclick="filterSelection('all')"> Preis</button>
                        <button class="btn" onclick="filterSelection('cars')"> Entfernung</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="searchResultsWrapper">
            <div class="searchFilter">
                <div class="searchFilter_block">
                    <div class="searchFilter_filter">
                        <h5 class="searchFilter_filter-title">Preis pro Tag</h5>
                        <div class="searchFilter_filter-content">
                            <div id="slidecontainer">
                                <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                <p>Preis: <span id="demo"></span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="searchResults">

            </div>

        </div>


       <!-- <div class="container-fluid">
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
        -->



        @include('includes.footer')
        <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value;

            slider.oninput = function() {
                output.innerHTML = this.value;
            }
        </script>
    </body>
</html>