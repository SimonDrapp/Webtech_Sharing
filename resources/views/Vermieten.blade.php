<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
        <title>my-easysharing | Vermieten</title>
    </head>

    <body>
        @include('includes.header')


        <div class="container-fluid">
            <div class="row">
                <div class="angabevermieten">
                <div class="col-md-12 col-lg-6">
                    <a href="/Autoeigenschaft"><img class="AutobildVermietung img-responsive " src="img/car2.jpg" data-src="holder.js/300x480/auto" alt="AutobildVermietung"></a>
                </div>

                <div class="col-md-12 col-lg-6">
                    <a href="/Fahrradeigenschaft"><img class="FahrradbildVermietung img-responsive" src="img/bike1.jpg" data-src="holder.js/300x480/auto" alt="FahrradbildVermietung"></a>
                </div>
            </div>
            </div>
       </div>
        @include('includes.footer')
    </body>

</html>