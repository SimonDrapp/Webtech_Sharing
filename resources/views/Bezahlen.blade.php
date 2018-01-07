<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | Bezahlung</title>
</head>
<body>
@include('includes.header')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bez">
            <h1><b>Zahlungsmethoden</b></h1>
        </div>
        <div class="row zahlen">
                <form>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 bub">
                    <span class="fa fa-cc-paypal"></span>
                        <div>
                    <input type="radio" name="bezahlen" value="paypal" checked>
                            </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 bub">
                    <span class="fa fa-cc-visa"></span>
                        <div>
                    <input type="radio" name="bezahlen" value="visa">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 bub">
                        <span class="fa fa-cc-amex"></span>
                        <div>
                        <input type="radio" name="bezahlen" value="americanexpress"></div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <p>Lastschrift</p>
                        <span class="fa fa-credit-card"></span>
                        <div>
                        <input type="radio" name="bezahlen" value="lastschrift">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <p>Rechnung</p>
                        <span class="fa fa-file-text-o"></span>
                    <div>
                        <input type="radio" name="bezahlen" value="rechnung">
                    </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <p>Barbezahlung</p>
                        <span class="fa fa-euro"></span>
                        <div>
                            <input type="radio" name="bezahlen" value="bar">
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-8 col-lg-9">
            <div class="rechnung">
                <h1>Rechnungsbetrag</h1>
                <p>Preis pro Tag: </p>
                <p>Anzahl der Tage: </p>
                <hr>
                <p>Preis: </p>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="col-lg-12">
        <button id="btZahlen" class=" btn btn-basic" type="button">Mieten!</button>
    </div>

</div>

@include('includes.footer')
</body>
</html>