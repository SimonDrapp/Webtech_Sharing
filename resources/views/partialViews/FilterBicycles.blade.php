<div class="searchFilter_filter">
    <h5 class="searchFilter_filter-title">Art</h5>
    <div class="searchFilter_filter-content">
        <ul>
            @foreach ($fArt as $fArt)
                <li id="fahrradArt"><a class="aContent" id="fahhradArt"
                       value="{{$fArt->id}}}}">{{ $fArt->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="searchFilter_filter">
    <h5 class="searchFilter_filter-title">Marke</h5>
    <div class="searchFilter_filter-content">
        <ul>
            @foreach ($fMarken as $fMarke)
                <li><a class="aContent" id="fahrradMarken" value="{{$fMarke->id}}">{{ $fMarke->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="searchFilter_filter">
    <h5 class="searchFilter_filter-title">Modell</h5>
    <div class="searchFilter_filter-content lastFilterContent">
        <ul id="fModelle">
            @foreach ($fModelle as $fModell)
                <li id="fahrradModelle"><a class="aContent" id="fahrradModelle"
                                                         value="{{$fModell->id}}}}">{{ $fModell->name }}</a></li>
            @endforeach
        </ul>
        <!--<button type="button" id="loadMore" class="btn btn-basic btn-block">Mehr anzeigen</button>-->
    </div>
</div>

