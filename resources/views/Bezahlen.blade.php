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
$hs = Session::get('startdate');
$he = Session::get('enddate');
$start = new DateTime($hs);
$end = new DateTime($he);
$result = date_diff($start, $end, true);
$results = $result->format('%d ');
$second = (floatval($price)) * (floatval($results));
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bez">
            <h1><b>Zahlungsmethoden</b></h1>
        </div>
        <div class="row zahlen">
            <form>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 bub">
              <!--      <span class="fa fa-cc-paypal"></span>       -->
                    <img src="//images.contentful.com/k4kk06v59kf0/34XWKE7TluEGMeiIoSEeMU/68b425ad5a3e59c06e0d61fa9f307faa/icon-32x32-paypal.svg">

                    <div>
                        <input type="radio" name="bezahlen" value="paypal" checked>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 bub">
              <!--      <span class="fa fa-cc-visa"></span>     -->
                    <img alt="MasterCard" class="sub-navigation__icon" src="//images.contentful.com/k4kk06v59kf0/1N19A6eZ7K8k6yWOuasO62/65c53dd1dc4a722106dc338fdbc686f0/icon-32x32-mastercard.svg"/>
                    <div>
                        <input type="radio" name="bezahlen" value="visa">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 bub">
             <!--       <span class="fa fa-cc-amex"></span>     -->
                    <img  alt="AmericanExpress" class="sub-navigation__icon" src="//images.contentful.com/k4kk06v59kf0/6ZbT7F9lnOcuC06Y2Q4am8/a183cc2336501b6137908cabc43d5445/icon-32x32-americanexpress.svg"/>
                    <div>
                        <input type="radio" name="bezahlen" value="americanexpress"></div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                    <p>Sofortüberweisung</p> <!-- SOFORTÜBERWEISUNG -->
          <!--          <span class="fa fa-credit-card"></span>     -->
                    <img alt="Sofortueberweisung" class="sub-navigation__icon" src="//images.contentful.com/k4kk06v59kf0/6MVFckBmuWKuseYAYA8aG0/cb0c7f1daf33c4af4f639bc10200c56a/icon-32x32-sofort.svg"/>
                    <div>
                        <input type="radio" name="bezahlen" value="lastschrift">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 bub">
                <!--    <span class="fa fa-file-text-o"></span> -->
                    <img alt="" class="sub-navigation__icon" src="//images.contentful.com/k4kk06v59kf0/1AvrcjfyCAIQkA8i8kAOy0/27202cb55c26bd24c050fa8789b4b230/icon-32x32-visa.svg"/>
                    <div>
                        <input type="radio" name="bezahlen" value="rechnung">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                    <p>Barbezahlung</p>
               <!--     <span class="fa fa-euro"></span>    -->
                    <img alt="Barbezahlung" class="sub-navigation__icon" src="//images.contentful.com/k4kk06v59kf0/2lLJWc1cheEwgiKwYY0uos/0f8cfee646757afc2c579e9d08d87cbd/icon-32x32-sepa.svg"/>
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
                <p>Anzahl der Tage: <?php echo $results?> Tage</p>
                <hr>
                <p>Preis: <?php echo $second ?> €</p>
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
                        <button id="closeButton" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
<script>
    $(document).on('click', '#closeButton', function(){
        $.get('counterMieten');
    })
</script>

</body>
</html>