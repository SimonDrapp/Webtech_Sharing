<!DOCTYPE>
<html>
    <head>
        @include('includes.head')
        <title>my-easysharing | Vermieten</title>
    </head>

    <body>
        @include('includes.header')

        <p class="VermietungÜberschrift">Stelle <span class="jetzt">jetzt</span> dein Auto oder dein Fahrrad mit wenigen Klicks zur Vermietung bereit!</p>

        <div class="row">
            <div class="col-md-6">
                <img class="AutobildVermietung img-responsive" src="img/car2.jpg" data-src="holder.js/300x480/auto" alt="AutobildVermietung">
                    <div class="bottonver">
                        <button type="button" class="btn btn-basic1 btn-responsive" id="AutoButtonVermietung">Hier gehts zur Autovermietung<span
                                    class="glyphicon glyphicon-triangle-right"></span></button>
                    </div>
            </div>


            <div class="col-md-6">
                <img class="FahrradbildVermietung img-responsive" src="img/bike1.jpg" data-src="holder.js/300x480/auto" alt="FahrradbildVermietung">
                    <div class="bottonver">
                        <button type="button" class="btn btn-basic1 btn-responsive" id="FahrradButtonVermietung">Hier gehts zur Fahrradvermietung<span
                                    class="glyphicon glyphicon-triangle-right"></span></button>
                    </div>
            </div>
        </div>

 <!--           <div class="col-md-6">
                <img class="FahrradbildVermietung img-responsive" src="img/bike1.jpg" data-src="holder.js/300x480/auto" alt="FahrradbildVermietung">
            </div>
       </div>

        <div class="button">
            <button type="button" class="btn btn-basic1 btn-responsive" id="AutoButtonVermietung">Zum Auto<span
                        class="glyphicon glyphicon-triangle-right"></span></button>
        </div>
-->

  <!--      <div class="row">
            <div class="col-md-offset-2">
                <button type="button" class="btn btn-basic1 btn-responsive" id="AutoButtonVermietung">Zum Auto<span
                            class="glyphicon glyphicon-triangle-right"></span></button>
            </div>

            <div class="col-md-offset-8">
                <button type="button" class="btn btn-basic1 btn-responsive" id="FahrradButtonVermietung">Zum Fahrrad<span
                            class="glyphicon glyphicon-triangle-right"></span></button>
            </div>

        </div>
        -->

        @include('includes.footer')
    </body>

</html>