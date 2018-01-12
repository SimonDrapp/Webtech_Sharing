
@foreach($sorted as $sort)
    <a href="#">
        <div class="searchResults_result">
            <div class="searchResults_image">
                <img src="img/searchPictures/{{$sort->bild}}" alt="{{$sort->modell}}">
            </div>
            <div class="searchResults_info">
                <div class="searchResults_info-inner">
                    <h3 class="searchResults_title">
                        {{$sort->modell}}
                    </h3>
                    <div>
                        <p>{{$sort->strasseNr}}, {{$sort->ort}}</p>
                    </div>
                </div>
                <div class="searchResults_priceContainer">
                    <h3 class="searchResults_price">
                        € {{$sort->preis}}
                    </h3>
                    <span>pro Tag</span>
                </div>
            </div>
        </div>
    </a>
@endforeach

