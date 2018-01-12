<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | allgemeine Suche </title>


</head>

<body>
@if(Auth::check())
    @include('includes.header2')
@else
    @include('includes.header')
@endif

<div class="container">
    <form id="quickSearchGeneral">
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
                    <button type="button" id="buttonFilter" class="btn btn-basic btn-block" onclick="displayFilter()">
                        Filter
                    </button>
                </div>

                <div class="col-xs-12 col-sm-2 form-group searchBtnPadding">
                    <button type="button" id="buttonSearch1" class=" btn btn-basic">Suchen
                        <span class="glyphicon glyphicon-search"></span></button>
                </div>

            </div>
        </div>
    </form>
</div>

<div class="container searchBtnPadding">
    <div class="row" id="buttonSortByAll">
        <div class="col-lg-10 col-md-9 col-sm-9" id="buttonShowMe">
            <div id="btnContainer" class="btn-group myBtnContainer">
                <button id="all" class="btn" >alle anzeigen</button>
                <button id="cars" class="btn">Autos</button>
                <button id="bicycles" class="btn">Fahrräder</button>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3" id="buttonSortBy">
            <div class="myBtnContainer btn-group">
                <button class="btn active" onclick="filterSelection('price')"> Preis</button>
                <button class="btn" onclick="filterSelection('distance')"> Entfernung</button>

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
                        <div id="slider-range"></div>
                        <p>
                            <input type="text" id="amount" readonly>
                        </p>
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
                    <span>Auto</span>
                    <hr class="headerLine" align="left">
                    <ul>
                        @foreach ($aMarken as $aMarke)
                            <li><a class="aContent" id="autoMarken" value="{{$aMarke->id}}">{{ $aMarke->name }}</a></li>
                        @endforeach
                    </ul>
                    <span>Fahrrad</span>
                    <hr class="headerLine" align="left">
                    <ul>
                        @foreach ($fMarken as $fMarke)
                            <li><a class="aContent id="fahrradMarken" value="{{$fMarke->id}}">{{ $fMarke->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Modell</h5>
                <div class="searchFilter_filter-content">
                    <span>Auto</span>
                    <hr class="headerLine" align="left">
                    <ul id="aModelle">
                        @foreach ($aModelle as $aModell)
                            <li class="showMore"><a class="aContent" id="AutoModelle"
                                                    value="{{$aModell->id}}}}">{{ $aModell->aModellname }}</a></li>
                        @endforeach
                    </ul>
                    <button type="button" id="loadMore" class="btn btn-basic btn-block">Mehr anzeigen</button>
                    <span>Fahrrad</span>
                    <hr class="headerLine" align="left">
                    <ul id="aModelle">
                        @foreach ($fModelle as $fModell)
                            <li><a class="aContent" id="AutoModelle" value="{{$fModell->id}}}}">{{ $fModell->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="searchFilter_filter" style="display: none">
                <h5 class="searchFilter_filter-title">Kraftstoff</h5>
                <div class="searchFilter_filter-content">
                    <ul>
                        @foreach ($Kraftstoffe as $Kraftstoff)
                            <li><a class="aContent" id="AutoKraftsoff"
                                   value="{{$Kraftstoff->id}}}}">{{ $Kraftstoff->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="searchFilter_filter" style="display: none">
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
        </div>
    </div>
</div>

@include('includes.footer')

<script>

   $(function () {
        var dateFormat = "yy-mm-dd",
            from = $("#datevon1")
                .datepicker({
                    dateFormat: "yy-mm-dd",
                    defaultDate: "0w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    minDate: 0,
                    monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
                        'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
                    monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
                    dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
                    dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
                    dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa']
                })
                .on("change", function () {
                    to.datepicker("option", "minDate", getDate(this));
                }),
            to = $("#datebis1").datepicker({
                //      defaultDate: "0w",
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                numberOfMonths: 1,
                monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
                    'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
                monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
                dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
                dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
                dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa']
            })
                .on("change", function () {
                    from.datepicker("option", "maxDate", getDate(this));
                });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });


    /*---MehrAnzeigenButton---*/
    $(function () {
        $(".showMore").slice(0, 4).show();
        $("#loadMore").on('click', function (e) {
            e.preventDefault();
            $(".showMore:hidden").slice(0, 4).slideDown();
        });
    });


    /*---FilterButton---*/
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

    /*---Slider---*/

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 200,
            values: [0, 125],
            slide: function (event, ui) {
                $("#amount").val("Preis: €" + ui.values[0] + " - €" + ui.values[1]);
            }
        });
        $("#amount").val("Preis: €" + $("#slider-range").slider("values", 0) +
            " - €" + $("#slider-range").slider("values", 1));
    });

    $(document).ready(function () {

        $checkFilter = 'all';

        var slider_E = document.getElementById("myRangeDistance");
        var output_E = document.getElementById("demoDistance");
        output_E.innerHTML = slider_E.value;

        slider_E.oninput = function () {
            output_E.innerHTML = this.value;
        }

        /*---Ajax---*/

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

        /*---FilterButtons---*/
        previouslyClicked = $('.btn').eq(0);
        $('.btn').click(function() {
            previouslyClicked.removeClass("btn active").addClass("btn");
            $(this).addClass("btn active")
            previouslyClicked = $(this);
        });

        $('#all').click(function(){
            $checkFilter = 'all';
            //console.log($checkFilter);
        });
        $('#cars').click(function(){
            $checkFilter = 'cars';
            //console.log($checkFilter);
        });
        $('#bicycles').click(function(){
            $checkFilter = 'bicycles';
            //console.log($checkFilter);
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

        /*---SuchenButton---*/
        $(document).on('click', '#buttonSearch1, #all, #cars, #bicycles', function () {

            var ortplz = $('#searchCity1').val();
            var ortArray = ortplz.split(", ");
            var ort = ortArray[0];
            var plz = ortArray[1];
            var startdate = $('#datevon1').val();
            var enddate = $('#datebis1').val();

            if(ort.indexOf(" ") > -1){
                ortArray1 = ort.split(" ");
                var ort = ortArray1[0];
            }

            console.log($checkFilter);

            if(startdate && enddate && ort) {

                $.ajax({
                    type: 'GET',
                    url: '/searchVehicles',
                    data: {'ort': ort, 'plz': plz, 'startdate': startdate, 'enddate': enddate, 'checkFilter': $checkFilter},
                    success: function (data) {
                        console.log(data)
                        $('.searchResults_block').html(data);
                    }
                })
            } else if(!ortplz && !startdate && !enddate){
                $.ajax({
                    type: 'GET',
                    url: '/searchVehicles',
                    data: {'checkFilter': $checkFilter},
                    success: function (data) {
                        console.log(data)
                        $('.searchResults_block').html(data);
                    }
                })

            }else if(!ortplz && startdate && enddate){
                $.ajax({
                    type: 'GET',
                    url: '/searchVehicles',
                    data: {'startdate': startdate, 'enddate': enddate, 'check': "checkVar", 'checkFilter': $checkFilter},
                    success: function (data) {
                        console.log(data)
                        $('.searchResults_block').html(data);
                    }
                })
            }else if(ortplz){
                $.ajax({
                    type: 'GET',
                    url: '/searchVehicles',
                    data: {'ort': ort, 'plz': plz, 'checkFilter': $checkFilter},
                    success: function (data) {
                        console.log(data)
                        $('.searchResults_block').html(data);
                    }
                })

            }
            else{
                $.ajax({
                    type: 'GET',
                    url: '/searchVehicles',
                    data: {'checkFilter': $checkFilter},
                    success: function (data) {
                        console.log(data)
                        $('.searchResults_block').html(data);
                    }
                })
            }
        });

        $(document).on('click', '#autoMarken', function () {

            var aMarken = $(this).text();
            $.ajax({
                type: 'GET',
                url: '/searchVehiclesFilter',
                data: {'marke': aMarken},
                success: function (data) {
                    console.log(data)
                    $('.searchResults_block').html(data);
                }
            })



        });

    });

</script>
</body>
</html>