<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    @include('includes.head')
    <title>my-easysharing | Autovermietung</title>
</head>


<body>
@include('includes.header')

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Marke</p>
                <div class="dropdown">
                    <form name="form1">
                        <select class="form-control" name="auswahl" role="menu" aria-labelledby="dropdownMenuButton" id="s1" disabled>
                            <option selected>Auswählen</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Modell</p>
                <div class="dropdown">
                    <form name="form">
                        <select class="form-control" role="menu" aria-labelledby="menu1" id="s2" name="role_id" disabled>
                            <option selected>Auswählen</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Autotyp</p>
                <div class="dropdown">
                    <form action="EigenschaftAutovermietung2.blade.php" method="post">
                        <select class="form-control" role="menu" aria-labelledby="menu1" disabled>
                            <option selected>Auswählen</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Baujahr</p>
                <div class="dropdown">
                    <form action="EigenschaftAutovermietung2.blade.php" method="post">
                        <select class="form-control" role="menu" aria-labelledby="menu1" disabled>
                            <option selected>Auswählen</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <form class="form-inline">
            <div class="col-xs-6 col-md-3">
                <div class="buttonUndText">
                    <p class="Text">Kraftstoff</p>
                    <select class="form-control" role="menu" aria-labelledby="menu1" disabled>
                        <option selected>Auswählen</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-md-4">
                <div class="buttonUndText">
                    <p class="TextBild">Bild</p>
                    <input type="file" name="img[]" class="file" accept="image/*" id="file1">
                    <div class="input-group mx-sm-4">
                        <form enctype="multipart/form-data">
                            <input type="text" id="inputBild" class="form-control input" disabled>
                        </form>
                    </div>
                    <button id="buttonBild" class="browse btn btn-basic input" type="button" disabled>Öffnen
                        <span class="glyphicon glyphicon-picture"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <form class="form-inline">
            <div class="col-xs-6 col-md-3">
                <div class="buttonUndText">
                    <p class="Text">Details</p>
                    <div class="form-group2">
                        <form action="EigenschaftAutovermietung2.blade.php" method="post">
                            <textarea class="form-control detailsInput" rows="4" id="Details" name="inputDetails" placeholder="Details zum Auto ..." disabled></textarea>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-3">
                <div class="buttonUndTextFuerPreis">
                    <p class="TextPreisProTag">Preis/T.</p>
                    <div class="form-group2 mx-sm-4">
                        <form action="EigenschaftAutovermietung2.blade.php" method="post">
                            <div class="input-group">
                            <label for="inputPreis" class="sr-only"></label>
                            <input type="text" class="form-control" id="inputPreis" name="inputPreis" disabled>
                                <span class="input-group-addon">€</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="Verschieben">
    <div class="container-fluid">
        <div class="row">
            <div class='col-xs-6 col-md-4'>
                <div class="form-group">
                    <div class="buttonUndText">
                        <p class="TextVon">Von</p>
                        <div class='input-group date' id='datetimepicker6'>
                            <input type='text' class="form-control" name="startdate" id="startdate" disabled/>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-xs-6 col-md-4'>
                <div class="form-group">
                    <div class="buttonUndText">
                        <p class="TextVon">Bis</p>
                        <div class='input-group date' id='datetimepicker7'>
                            <input type='text' class="form-control" name="enddate" id="enddate" disabled/>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <form class="AGBFeld">
                <fieldset id="agb">
                    <input type="radio" name="agb" id="akzeptieren" value="ok">
                    <label for="akzeptieren">unsere <a href="/AGB">AGB</a> akzeptieren</label>
                    <br>
                    <input type="radio" name="agb" id="ablehnen" value="no" checked>
                    <label for="ablehnen">ablehnen</label>
                </fieldset>
            </form>
        </div>

        <div class="col-xs-6 col-md-4">
            <div class="buttonUndText">
                <a href="/Fahrradeigenschaft" id="Zurueck"> <button type="button" class="btn btn-basic1 btn-responsive" id="Zurueck2"><span
                                class="glyphicon glyphicon-triangle-left"></span>Zurück</button></a>
            </div>
        </div>

        <div class="col-xs-6 col-md-4">
            <div class="buttonUndText">
                <a href="#" id="MeldeAutoAn2"> <button type="button" class="btn btn-basic1 btn-responsive" id="MeldeAutoAnButton2" disabled>Auto anmelden<span
                                class="glyphicon glyphicon-triangle-right"></span></button></a>
            </div>
        </div>
    </div>
</div>


@include('includes.footer')


<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('ablehnen').checked = true;
        document.querySelector('#agb').addEventListener('click', weiter);

        function weiter() {
            if (document.getElementById('akzeptieren').checked  == true) {
                document.getElementById('MeldeAutoAnButton2').removeAttribute('disabled');
            }
            if (document.getElementById('ablehnen').checked  == true) {
                document.getElementById('MeldeAutoAnButton2').setAttribute('disabled','disabled');
            }
        }

    });
    </script>
</body>
</html>