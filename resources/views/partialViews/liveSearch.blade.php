
@foreach($showCollection as $show)
    <a href="/Ansicht/{{$show->name}}/{{$show->id}}" class="showMoreResults">
        <div class="searchResults_result">
            <div class="searchResults_image">
                <img src="{{asset('https://s3.eu-central-1.amazonaws.com/weteuploadss2017'.$show->bild)}}" alt="{{$show->marke}}, {{$show->modell}}">
                <?php echo $show->bild;?>
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


