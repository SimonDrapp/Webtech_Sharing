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
                <li><a class="aContent" id="fahrradMarken" value="{{$fMarke->id}}">{{ $fMarke->name }}</a>
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
                                                         value="{{$aModell->id}}}}">{{ $aModell->aModellname }}</a></li>
            @endforeach
        </ul>
        <button type="button" id="loadMore" class="btn btn-basic btn-block">Mehr anzeigen</button>
        <span>Fahrrad</span>
        <hr class="headerLine" align="left">
        <ul id="fModelle">
            @foreach ($fModelle as $fModell)
                <li><a class="aContent" id="fahrradModelle" value="{{$fModell->id}}}}">{{ $fModell->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
