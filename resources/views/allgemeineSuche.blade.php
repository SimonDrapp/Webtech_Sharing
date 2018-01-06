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
                <div class="col-xs-11 col-sm-4 form-group searchPadding">
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
                <div class="col-xs-12 col-sm-3 form-group InputWithIcon changePadding">
                    <input class="form-control" id="datevon1" type="text" name="date"
                           placeholder="Abholung">
                    <i id class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                </div>
                <div class="col-xs-12 col-sm-3 form-group InputWithIcon changePadding">
                    <input class="form-control" id="datebis1" type="text" name="date"
                           placeholder="Rückgabe">
                    <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                </div>
                <div class="col-xs-12 btnFilter">
                    <button type="button" id="buttonSearch1" class="btn btn-basic btn-block" onclick="displayFilter()">
                        Filter
                    </button>
                </div>

                <div class="col-xs-12 col-sm-2 form-group searchBtnPadding">
                    <a href="/allgemeineSuche">
                        <button id="buttonSearch1" class=" btn btn-basic">Suchen
                            <span class="glyphicon glyphicon-search"></span></button>
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="container searchBtnPadding">
    <div class="row" id="buttonSortByAll">
        <div class="col-sm-9" id="buttonShowMe">
            <div class="btn-group myBtnContainer">
                <button class="btn" onclick="filterSelection('all')"> alle anzeigen</button>
                <button class="btn" onclick="filterSelection('cars')"> Autos</button>
                <button class="btn" onclick="filterSelection('animals')"> Fahrräder</button>
            </div>
        </div>
        <div class="col-sm-3" id="buttonSortBy">
            <div class="myBtnContainer btn-group">
                <button class="btn" onclick="filterSelection('all')"> Preis</button>
                <button class="btn" onclick="filterSelection('cars')"> Entfernung</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid searchResultsWrapper">
    <div class="searchFilter" id="searchFilter">
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
                            <li><a class="aContent" id="AutoMarken" value="{{$aMarke->id}}">{{ $aMarke->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Modell</h5>
                <div class="searchFilter_filter-content">
                    <ul id="aModelle">
                        @foreach ($aModelle as $aModell)
                            <li><a class="aContent" id="AutoModelle" value="{{$aModell->id}}}}">{{ $aModell->aModellname }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Kraftstoff</h5>
                <div class="searchFilter_filter-content">
                    <ul>
                        @foreach ($Kraftstoffe as $Kraftstoff)
                            <li><a class="aContent" id="AutoKraftsoff" value="{{$Kraftstoff->id}}}}">{{ $Kraftstoff->name }}</a></li>
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
            @foreach($aVermietung as $aVer)
                <a href="#">
                    <div class="searchResults_result">
                        <div class="searchResults_image">
                            <img src="img/searchPictures/{{$aVer->bild}}" alt="{{$aVer->modell}}">
                        </div>
                        <div class="searchResults_info">
                            <div class="searchResults_info-inner">
                                <h3 class="searchResults_title">
                                    {{$aVer->modell}}
                                </h3>
                                <div>
                                    <p>{{$aVer->strasseNr}}, {{$aVer->ort}}</p>
                                </div>
                            </div>
                            <div class="searchResults_priceContainer">
                                <h3 class="searchResults_price">
                                    € {{$aVer->preis}}
                                </h3>
                                <span>pro Tag</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

@include('includes.footer')

<script>

    //---Filter-Button---
    var filterCounter = 0;

    function displayFilter() {
        if (filterCounter % 2 == 0) {
            document.getElementById("searchFilter").style.display = "block";
            filterCounter++;
        } else if (filterCounter % 2 != 0) {
            document.getElementById("searchFilter").style.display = "none";
            filterCounter++;
        }
    }

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

        $('#searchCity1').on('keyup', function () {

            $value = $(this).val();

            if ($value == "") {
                $('#liveSearch').html("");
                $('#liveSearch').css({border: "0px"});
            } else {


                $.ajax({
                    type: 'GET',
                    url: '/search',
                    data: {'search': $value},
                    success: function (data) {

                        if (data == "") {
                            $('#liveSearch').html("");
                            $('#liveSearch').css({border: "0px"});
                        } else {

                            $('#liveSearch').html(data);
                            $('#liveSearch').css({border: "1px solid #A5ACB2"});
                        }
                    }


                })
            }
        });

        $(document).on('click', '#test', function () {

            $valueLiveSearch = $(this).text();
            //console.log($valueLiveSearch);
            $('#searchCity1').css({fontSize: "14px"});
            $('#searchCity1').val($valueLiveSearch);
            $('#liveSearch').html("");
            $('#liveSearch').css({border: "0px"});
        });


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
                        //console.log(aModell);
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