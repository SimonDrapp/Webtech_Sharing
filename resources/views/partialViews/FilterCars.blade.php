<div class="searchFilter_filter">
    <h5 class="searchFilter_filter-title">Marke</h5>
    <div class="searchFilter_filter-content">
        <ul>
            @foreach ($aMarken as $aMarke)
                <li><a class="aContent" id="autoMarken" value="{{$aMarke->id}}">{{ $aMarke->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="searchFilter_filter">
    <h5 class="searchFilter_filter-title">Modell</h5>
    <div class="searchFilter_filter-content">
        <ul id="aModelle">
            @foreach ($aModelle as $aModell)
                <li class="showMore" id="autoModelle"><a class="aContent" id="AutoModelle"
                                                         value="{{$aModell->id}}}}">{{ $aModell->aModellname }}</a></li>
            @endforeach
        </ul>
        <button type="button" id="loadMore" class="btn btn-basic btn-block">Mehr anzeigen</button>
    </div>
</div>
<div class="searchFilter_filter">
    <h5 class="searchFilter_filter-title">Kraftstoff</h5>
    <div class="searchFilter_filter-content">
        <ul>
            @foreach ($Kraftstoffe as $Kraftstoff)
                <li><a class="aContent" id="autoKraftstoff"
                       value="{{$Kraftstoff->id}}}}">{{ $Kraftstoff->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="searchFilter_filter">
    <h5 class="searchFilter_filter-title">Baujahr</h5>
    <div class="searchFilter_filter-content lastFilterContent">
        <select class="form-control" role="menu" aria-labelledby="menu1">
            <option selected>Auswählen</option>
            @foreach ($Baujahre as $Baujahr)
                <option id="autoBaujahr">{{ $Baujahr->jahr }}</option>
            @endforeach
        </select>
    </div>
</div>