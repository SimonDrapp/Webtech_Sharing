<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | allgemeine Suche </title>
    <!--<script src="/public/js/allgemeineSuche.js"></script>-->

</head>

<body>
@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
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
                               placeholder="Postleitzahl oder Ort" autocomplete="off"
                        value=@if($ortPlz)"{{$ortPlz}}"@endif>
                        <span id="inputGpsBtn" class="input-group-btn">
                            <button id="buttonGPS2" type="button" class=" btn btn-basic ">
                            <span class="glyphicon glyphicon-map-marker"></span></button>
                        </span>
                    </div>
                    <ul id="liveSearch"></ul>
                </div>
                <div class="col-xs-12 col-sm-3 form-group InputWithIcon changePadding">
                    <input class="form-control" id="datevon1" type="text" name="date"
                           placeholder="Abholung" value=@if($enddate)"{{$startdate}}"@endif>
                    <i id class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                </div>
                <div class="col-xs-12 col-sm-3 form-group InputWithIcon changePadding">
                    <input class="form-control" id="datebis1" type="text" name="date"
                           placeholder="Rückgabe" value=@if($startdate)"{{$enddate}}"@endif>
                    <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                </div>
                <div class="col-xs-12 btnFilter">
                    <button type="button" id="buttonFilter" class="btn btn-basic btn-block" onclick="displayFilter()">
                        Filter
                    </button>
                </div>
                <div class="col-sm-2 form-group searchBtnPadding">
                    <button type="button" id="buttonSearch1" class=" btn btn-basic">Suchen
                        <span class="glyphicon glyphicon-search"></span></button>
                </div>

            </div>
        </div>
    </form>
</div>

<div class="container sortBtn">
    <div class="row" id="buttonSortByAll">
        <div class="col-lg-11 col-md-11 col-sm-11" id="buttonShowMe">
            <div id="btnContainer" class="btn-group myBtnContainer">
                <button class="btn all {{$allActive}}">alle anzeigen</button>
                <button class="btn cars {{$carActive}}">Autos</button>
                <button class="btn bicycles {{$bicycleActive}}">Fahrräder</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid searchResultsWrapper">
    <div class="searchFilter" id="searchFilter">
        <div class="searchFilter_block">
            <div class="searchFilter_filter" id="sortBtnMobile">
                <h5 class="searchFilter_filter-title">Sortierung</h5>
                <div class="searchFilter_filter-content">
                    <div id="buttonSortByAllMobil">
                        <div id="btnContainerMobil" class="btn-group myBtnContainerMobil">
                            <button class="btn all ac">alle anzeigen</button>
                            <button class="btn cars">Autos</button>
                            <button class="btn bicycles">Fahrräder</button>
                        </div>
                    </div>
                </div>
            </div>
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
           <!-- <div class="searchFilter_filter">
                <h5 class="searchFilter_filter-title">Entfernung</h5>
                <div class="searchFilter_filter-content">
                    <div id="slidecontainer">
                        <input type="range" min="1" max="300" value="150" class="slider" id="myRangeDistance">
                        <p>Entfernung: <span id="demoDistance"></span>km</p>
                    </div>
                </div>
            </div>-->
            <div class="inputFilter">
                <div class="searchFilter_filter">
                    <h5 class="searchFilter_filter-title">Marke</h5>
                    <div class="searchFilter_filter-content">
                        <span>Auto</span>
                        <hr class="headerLine" align="left">
                        <ul>
                            @foreach ($aMarken as $aMarke)
                                <li><a class="aContent" id="autoMarken" value="{{$aMarke->id}}">{{ $aMarke->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <span>Fahrrad</span>
                        <hr class="headerLine" align="left">
                        <ul>
                            @foreach ($fMarken as $fMarke)
                                <li><a class="aContent" id="fahrradMarken"
                                       value="{{$fMarke->id}}">{{ $fMarke->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="searchFilter_filter">
                    <h5 class="searchFilter_filter-title">Modell</h5>
                    <div class="searchFilter_filter-content lastFilterContent">
                        <span>Auto</span>
                        <hr class="headerLine" align="left">
                        <ul id="aModelle">
                            @foreach ($aModelle as $aModell)
                                <li class="showMore" id="autoModelle"><a class="aContent" id="AutoModelle"
                                                                         value="{{$aModell->id}}}}">{{ $aModell->aModellname }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <button type="button" id="loadMore" class="btn btn-basic btn-block">Mehr anzeigen</button>
                        <span>Fahrrad</span>
                        <hr class="headerLine" align="left">
                        <ul id="fModelle">
                            @foreach ($fModelle as $fModell)
                                <li><a class="aContent" id="fahrradModelle"
                                       value="{{$fModell->id}}}}">{{ $fModell->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="searchBtnMobil">
        <button type="button" id="buttonSearchMobil" class=" btn btn-basic btn-block">Suchen
            <span class="glyphicon glyphicon-search"></span></button>
    </div>
    <div class="searchResults">
        <div class="searchResults_block">
            @foreach($showCollection as $show)
                <a href="/Ansicht/{{$show->name}}/{{$show->id}}" class="showMoreResults">
                    <div class="searchResults_result">
                        <div class="searchResults_image">
                            <img src="img/searchPictures/{{$show->bild}}" alt="{{$show->marke}}, {{$show->modell}}">
                        </div>
                        <div class="searchResults_info">
                            <div class="searchResults_info-inner">
                                <h3 class="searchResults_title">
                                    {{$show->marke}}  {{$show->modell}}
                                </h3>
                                <div>
                                    <p>{{$show->strasseNr}}, {{$show->ort}}</p>
                                </div>
                            </div>
                            <div class="searchResults_priceContainer">
                                <h3 class="searchResults_price">
                                    € {{$show->preis}}
                                </h3>
                                <span>pro Tag</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            <button type="button" id="loadMoreResults" class="btn btn-basic btn-block">Nächste Anzeigen
                <span class="glyphicon glyphicon-chevron-down"></span></button>
        </div>
    </div>
</div>

@include('includes.footer')

<script src="js/allgemeineSuche.js"></script>

</body>
</html>