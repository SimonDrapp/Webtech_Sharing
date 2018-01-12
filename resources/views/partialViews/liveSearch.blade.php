
@foreach($showCollection as $show)
    <a href="#">
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

