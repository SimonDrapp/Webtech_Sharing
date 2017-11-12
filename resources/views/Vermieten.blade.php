<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
        <title>my-easysharing | Vermieten</title>
    </head>

    <body>
        @include('includes.header')

        <p class="VermietungÜberschrift">Stelle <span class="jetzt">jetzt</span> dein Auto oder dein Fahrrad mit wenigen Klicks zur Vermietung bereit!</p>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <img class="AutobildVermietung img-rounded" src="img/car2.jpg" data-src="holder.js/300x480/auto" alt="AutobildVermietung">
                        <div class="bottonver">
                            <button type="button" class="btn btn-basic1 btn-responsive" id="AutoButtonVermietung">Hier vermieten<span
                                        class="glyphicon glyphicon-triangle-right"></span></button>
                        </div>
                </div>


                <div class="col-md-12 col-lg-6">
                    <img class="FahrradbildVermietung img-rounded" src="img/bike1.jpg" data-src="holder.js/300x480/auto" alt="FahrradbildVermietung">
                        <div class="bottonver">
                            <button type="button" class="btn btn-basic1 btn-responsive" id="FahrradButtonVermietung"><a href="Vermieten/Auto"></a>Hier vermieten<span
                                        class="glyphicon glyphicon-triangle-right"></span></button>
                        </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </body>

</html>