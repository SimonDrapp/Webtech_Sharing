<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | Bezahlung</title>
</head>
<body>
@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif
<?php
$price = Session::get('price');
$start = new DateTime($dates->startdate);
$end = new DateTime($dates->enddate);

$result = date_diff($start, $end, true );
echo $result;


?>

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
                <p>Preis pro Tag: <?php echo $price?> €</p>
                <p>Anzahl der Tage: </p>
                <hr>
                <p>Preis: </p>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="col-lg-12">
        <button id="btZahlen" class=" btn btn-basic" data-toggle="modal" data-target="#myModal4" type="button">Mieten!
        </button>
        <div class="modal fade" id="myModal4" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Erreicht! :D</h4>
                    </div>
                    <div class="modal-body">
                        <p>Hier endet unser Projekt :)</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
</body>
</html>