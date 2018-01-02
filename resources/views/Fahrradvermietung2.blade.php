<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | Vermieten</title>
</head>

<body>
    @include('includes.header')

    {{csrf_field()}}

    <?php
    $values = $_POST['art'];
    $values = explode(', ', $values);
    $value2 = $values[1];
    ?>

    <?php
    $values1 = $_POST['marke'];
    $values1 = explode(', ', $values1);
    $value3 = $values1[1];
    ?>

    <?php
    $values2 = $_POST['modell'];
    $values2 = explode(', ', $values2);
    $value4 = $values2[1];
    ?>

    <div class="container-fluid">
        <div class="row">
            <form action="#" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="col-xs-6 col-md-3 speichern">
                    <p class="daten2">Art</p>
                    <label for="marke"></label>
                    <input style="text-align: center" type="text" class="form-control" name="art" value="<?php echo $value2; ?>" disabled>
                </div>
                <div class="col-xs-6 col-md-3 speichern">
                    <p class="daten2">Marke</p>
                    <label for="modell"></label>
                    <input style="text-align: center" type="text" class="form-control" name="marke" value="<?php echo $value3; ?>" disabled>
                </div>
                <div class="col-xs-6 col-md-3 speichern">
                    <p class="daten2">Modell</p>
                    <label for="modell"></label>
                    <input style="text-align: center" type="text" class="form-control" name="modell" value="<?php echo $value4; ?>" disabled>
                </div>
                <div class="col-xs-6 col-md-3 speichern">
                    <p class="daten2">Farbe</p>
                    <label for="farbe"></label>
                    <input style="text-align: center" type="text" class="form-control" name="farbe" value="{{$fahrradvermietungen -> farbe}}" disabled>
                </div>
                <div class="col-xs-6 col-md-4 speichern">
                    <p class="daten2">Preis</p>
                    <label for="preis"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="preis" value="{{$fahrradvermietungen -> preis}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-euro"></span>
                    </span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4 speichern">
                    <p class="daten2">Bild</p>
                    <label for="bild"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="bild" value="{{$fahrradvermietungen -> bild}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-picture"></span>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 speichern">
                    <p class="daten2">Details</p>
                    <label for="details"></label>
                    <textarea type="text" rows="3" class="form-control details" id="detail" name="details" disabled>{{$fahrradvermietungen -> details}}</textarea>
                </div>
                <div class="col-xs-6 col-md-4 speichern">
                    <p class="daten2">Postleitzahl</p>
                    <label for="postleitzahl"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="postleitzahl" value="{{$fahrradvermietungen -> postleitzahl}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-map-marker"></span>
                    </span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4 speichern">
                    <p class="daten2">Ort</p>
                    <label for="ort"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="ort" value="{{$fahrradvermietungen -> ort}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-home"></span>
                    </span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 speichern">
                    <p class="daten2">Strasse/Nr.</p>
                    <label for="strasseNr"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="strasseNr" value="{{$fahrradvermietungen -> strasseNr}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-road"></span>
                    </span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6 speichern">
                    <p class="daten2">Von</p>
                    <label for="startdate"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="startdate" value="{{$fahrradvermietungen -> startdate}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6 speichern">
                    <p class="daten2">Bis</p>
                    <label for="enddate"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="enddate" value="{{$fahrradvermietungen -> enddate}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
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
                        <button type="submit" class="btn btn-basic1 btn-responsive" id="MeldeAutoAnButton2" disabled>Fahrrad anmelden<span
                                    class="glyphicon glyphicon-triangle-right"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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

    @include('includes.footer')

</body>

</html>