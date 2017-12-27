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
                        <a href="/allgemeineSuche">
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
                        <input type="range" min="1" max="200" value="100" class="slider" id="myRangePrice">
                        <p>Preis: <span id="demoPrice"></span>€</p>
                    </div>
                </div>
            </div>
            <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Entfernung</h5>
                <div class="searchFilter_filter-content">
                    <div id="slidecontainer">
                        <input type="range" min="1" max="300" value="150" class="slider" id="myRangeDistance">
                        <p>Entfernung: <span id="demoDistance"></span>km</p>
                    </div>
                </div>
            </div>
            <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Marke</h5>
                <div class="searchFilter_filter-content">
                    <ul>
                        @foreach ($aMarken as $aMarke)
                            <li><a id="AutoMarken" value="{{$aMarke->id}}">{{ $aMarke->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Modell</h5>
                <div class="searchFilter_filter-content">
                    <ul id="aModelle">
                        @foreach ($aModelle as $aModell)
                            <li><a id="AutoModelle" value="{{$aModell->id}}}}">{{ $aModell->aModellname }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Kraftstoff</h5>
                <div class="searchFilter_filter-content">
                    <ul>
                        @foreach ($Kraftstoffe as $Kraftstoff)
                            <li><a id="AutoKraftsoff" value="{{$Kraftstoff->id}}}}">{{ $Kraftstoff->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Baujahr</h5>
                <div class="searchFilter_filter-content">
                    <select class="form-control" role="menu" aria-labelledby="menu1">
                        <option selected>Auswählen</option>
                        @foreach ($Baujahre as $Baujahr)
                            <option>{{ $Baujahr->jahr }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="searchResults">
        <ul type="none">
            <li data-index="0">
                <div class="searchResults_result">
                    <a href="#">
                        <div class="searchResults_image">
                            <!--<img src="img/searchPictures/Auto/audiA4.jpg" alt="Audi A3" height="400" width="600">-->
                            <h3>Auto Bild</h3>

                        </div>
                        <div class="searchResults_info">
                            <div class="searchResults_info-inner">
                                <h3 class="searchResults_title">
                                    <a>Automarke + Modell</a>
                                </h3>
                                <div>
                                    <p>Straße, Ort</p>
                                </div>
                            </div>
                            <div class="searchResults_priceContainer">
                                <h3 class="searchResults_price">
                                    € 42,50
                                </h3>
                                <span>pro Tag</span>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
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

    $(document).ready(function () {


        var slider_P = document.getElementById("myRangePrice");
        var output_P = document.getElementById("demoPrice");
        output_P.innerHTML = slider_P.value;

        slider_P.oninput = function () {
            output_P.innerHTML = this.value;
        }

        var slider_E = document.getElementById("myRangeDistance");
        var output_E = document.getElementById("demoDistance");
        output_E.innerHTML = slider_E.value;

        slider_E.oninput = function () {
            output_E.innerHTML = this.value;
        }

        <!-- Ajax-->

        $(document).on('click', '#AutoMarken', function () {

            var aMarken_id = $(this).attr('value');
            //console.log(aMarken_id);
            var $aModelle = $('#aModelle');

            $.ajax({
                type: 'GET',
                url: '/findAutoModelle',
                data: {'id': aMarken_id},
                success: function (data) {

                    $("#aModelle").empty();
                    $.each(data, function (i, aModell) {
                        console.log(aModell);
                        $aModelle.append('<li><a id="AutoModelle" value=' + aModell.id + '>' + aModell.aModellname + '</a></li>')
                    });
                },

                error: function () {

                    alert("Ein Fehler ist aufgetreten");

                }


            })


        });
    });
</script>
</body>
</html>