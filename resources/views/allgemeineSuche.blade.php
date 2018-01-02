<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | allgemeine Suche </title>


</head>

<body>
@include('includes.header')

<div class="container">
    <form>
        <div class="row">
            <div class="eingabefeld">
                <div class="col-xs-10 col-sm-4 form-group searchPadding">
                    <div class="input-group">
                        <input id="searchCity1" type="text" class="form-control"
                               placeholder="Postleitzahl oder Ort">
                        <span class="input-group-btn">
                            <button id="buttonGPS2" type="button" class=" btn btn-basic ">
                            <span class="glyphicon glyphicon-map-marker"></span></button>
                        </span>
                    </div>
                </div>
                <!--<div class="col-xs-2 col-sm-1 GpsPadding">
                    <button id="buttonGPS2" type="button" class=" btn btn-basic ">
                        <span class="glyphicon glyphicon-map-marker"></span></button>
                </div>-->

                <div class="col-xs-12 col-sm-3 form-group InputWithIcon changePadding">
                    <input class="form-control" id="datevon1" type="text" name="date"
                           placeholder="Abholung">
                    <!--<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>-->
                </div>
                <div class="col-xs-12 col-sm-3 form-group InputWithIcon changePadding">
                    <input class="form-control" id="datebis1" type="text" name="date"
                           placeholder="Rückgabe">
                    <!--<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>-->
                </div>
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <button id="buttonSearch1" class="btn btn-basic btn-block">Filter</button>
                </div>

                <div class="col-xs-12 col-sm-2 form-group searchBtnPadding hidden-xs">
                    <a href="/allgemeineSuche">
                        <button id="buttonSearch1" class=" btn btn-basic">Suchen
                            <span class="glyphicon glyphicon-search"></span></button>
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="container hidden-xs">
    <div class="row" id="buttonSortByAll">
        <div class="col-sm-9">
            <div class="btn-group myBtnContainer">
                <button class="btn" onclick="filterSelection('all')"> alle anzeigen</button>
                <button class="btn" onclick="filterSelection('cars')"> Autos</button>
                <button class="btn" onclick="filterSelection('animals')"> Fahrräder</button>
            </div>
        </div>
        <div class="col-sm-2" id="buttonSortBy">
            <div class="myBtnContainer btn-group">
                <button class="btn" onclick="filterSelection('all')"> Preis</button>
                <button class="btn" onclick="filterSelection('cars')"> Entfernung</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid searchResultsWrapper">
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
        <div class="searchResults_block">
            @foreach($Vermieten as $ver)
                <div class="searchResults_result">
                    <!-- <a href="#">-->
                    <div class="searchResults_image">

                    </div>
                    <div class="searchResults_info">
                        <div class="searchResults_info-inner">
                            <h3 class="searchResults_title">
                                <a>{{$ver->idAuto}}</a>
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
                    <!-- </a>-->
                </div>
            @endforeach
        </div>
    </div>
</div>

<!--include footer-->

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