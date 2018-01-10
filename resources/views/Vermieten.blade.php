<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | Vermieten</title>
</head>

<body>

@if(Auth::check())
    @include('includes.header2')
@else
    @include('includes.header')
@endif

{{ csrf_field() }}

<p class="VermietungÜberschrift">Stelle <span class="jetzt">jetzt</span> dein Auto oder dein Fahrrad mit wenigen Klicks zur Vermietung bereit!</p>

<div class="container-fluid">
    <div class="row">
        <form action="/Autoeigenschaft" method="post">
            {{csrf_field()}}
        <div class="col-md-12 col-lg-6">
            <img class="AutobildVermietung img-rounded" src="img/car2.jpg" data-src="holder.js/300x480/auto" alt="AutobildVermietung">
            <div class="bottonver">
             <a href="{{ route('Autoeigenschaft') }}" id="LinkAutoeigenschaft" ><button  type="button" class="btn btn-basic1 btn-responsive" id="AutoButtonVermietung">Hier vermieten<span
                                class="glyphicon glyphicon-triangle-right"></span></button> </a>
            </div>
        </div>

        <div class="col-md-12 col-lg-6">
            <img class="FahrradbildVermietung img-rounded" src="img/bike1.jpg" data-src="holder.js/300x480/auto" alt="FahrradbildVermietung">
            <div class="bottonver">
                <a href="{{ route('Fahrradeigenschaft') }}" id="LinkAutoeigenschaft" ><button  type="button" class="btn btn-basic1 btn-responsive" id="AutoButtonVermietung">Hier vermieten<span
                                class="glyphicon glyphicon-triangle-right"></span></button></a>
            </div>
        </div>
        </form>
    </div>
</div>
@include('includes.footer')
</body>

</html>