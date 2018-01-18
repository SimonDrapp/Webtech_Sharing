<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    @include('includes.head')
    <title>my-easysharing | Autovermietung</title>
</head>


<body>

@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif

{{csrf_field()}}

<div class="container-fluid">
    <div class="row">
        <form action="{{ route('Autoeigenschaft3') }}" method="post">
            {{csrf_field()}}
            <div class="col-xs-6 col-md-3 speichern">
                <p class="daten2">Marke</p>
                <label for="marke"></label>
                <input style="text-align: center" type="text" class="form-control" name="modell" value="{{$autovermietungen->marke}}" disabled>
            </div>
            <div class="col-xs-6 col-md-3 speichern">
                <p class="daten2">Modell</p>
                <label for="modell"></label>
                <input style="text-align: center" type="text" class="form-control" name="modell" value="{{$autovermietungen->modell}}" disabled>
            </div>
            <div class="col-xs-6 col-md-3 speichern">
                <p class="daten2">Baujahr</p>
                <label for="baujahr"></label>
                <input style="text-align: center" type="text" class="form-control" name="baujahr" value="{{$autovermietungen -> baujahr}}" disabled>
            </div>
            <div class="col-xs-6 col-md-3 speichern">
                <p class="daten2">Farbe</p>
                <label for="farbe"></label>
                <input style="text-align: center" type="text" class="form-control" name="farbe" value="{{$autovermietungen -> farbe}}" disabled>
            </div>
            <div class="col-xs-6 col-md-3 speichern">
                <p class="daten2">Kraftstoff</p>
                <label for="kraftstoff"></label>
                <input style="text-align: center" type="text" class="form-control" name="kraftstoff" value="{{$autovermietungen -> kraftstoff}}" disabled>
            </div>
            <div class="col-xs-6 col-md-3 speichern">
                <p class="daten2">Preis</p>
                <label for="preis"></label>
                <div class="input-group">
                    <input style="text-align: center" type="text" class="form-control" name="preis" value="{{$autovermietungen -> preis}}" disabled>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-euro"></span>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 speichern">
                <p class="daten2">Bild</p>
                <label for="bild"></label>
                <div class="input-group">
                    <input style="text-align: center" type="text" class="form-control" name="bild" value="{{$autovermietungen -> bild}}" disabled>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-picture"></span>
                        </span>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 speichern">
                <p class="daten2">Details</p>
                <label for="details"></label>
                <textarea type="text" rows="3" class="form-control details" id="detail" name="details" disabled>{{$autovermietungen -> details}}</textarea>
            </div>
            <div class="col-xs-6 col-md-4 speichern">
                <p class="daten2">Postleitzahl</p>
                <label for="postleitzahl"></label>
                <div class="input-group">
                    <input style="text-align: center" type="text" class="form-control" name="postleitzahl" value="{{$autovermietungen -> postleitzahl}}" disabled>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-map-marker"></span>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 speichern">
                <p class="daten2">Ort</p>
                <label for="ort"></label>
                <div class="input-group">
                    <input style="text-align: center" type="text" class="form-control" name="ort" value="{{$autovermietungen ->ort}}" disabled>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-home"></span>
                    </span>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 speichern">
                <p class="daten2">Strasse/Nr.</p>
                <label for="strasseNr"></label>
                <div class="input-group">
                    <input style="text-align: center" type="text" class="form-control" name="strasseNr" value="{{$autovermietungen -> strasseNr}}" disabled>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-road"></span>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 speichern">
                <p class="daten2">Von</p>
                <label for="startdate"></label>
                <div class="input-group">
                    <input style="text-align: center" type="text" class="form-control" name="startdate" value="{{$autovermietungen -> startdate}}" disabled>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 speichern">
                <p class="daten2">Bis</p>
                <label for="enddate"></label>
                <div class="input-group">
                    <input style="text-align: center" type="text" class="form-control" name="enddate" value="{{$autovermietungen -> enddate}}" disabled>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
         <!--       <form class="AGBFeld">      -->
                    <fieldset id="agb">
                        <input type="radio" name="agb" id="akzeptieren" value="ok">
                        <label for="akzeptieren">unsere <a href="/AGB">AGB</a> akzeptieren</label>
                        <br>
                        <input type="radio" name="agb" id="ablehnen" value="no" checked>
                        <label for="ablehnen">ablehnen</label>
                    </fieldset>
      <!--          </form>     -->
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="buttonUndText">
                    <a href="{{ route('Autoeigenschaft') }}" id="Zurueck"> <button type="button" class="btn btn-basic1 btn-responsive" id="Zurueck2"><span
                                    class="glyphicon glyphicon-triangle-left"></span>Zurück</button></a>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="buttonUndText">
                    <button type="button" class="btn btn-basic1 btn-responsive" id="MeldeAutoAnButton2" data-toggle="modal" data-target="#myModal" disabled>Auto anmelden<span
                                class="glyphicon glyphicon-triangle-right"></span></button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Vielen Dank!</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Nur noch zur Startseite & Ihr Auto steht schon bereit.</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="/"><button type="submit" class="btn btn-primary" data-target="/">Zurück zur Startseite</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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


