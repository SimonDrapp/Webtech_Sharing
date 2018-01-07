<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    @include('includes.head')
    <title>my-easysharing | Autovermietung</title>
</head>


<body>
@include('includes.header')

<div class="container-fluid">
    <div class="row">
        <form action="/Autoeigenschaft2" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <h2 class="angabenAuto">Angaben zu Ihrem Auto</h2>

    <div class="autoangabe">
        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Marke</p>
                        <select class="form-control" id="prod_cat_id" role="menu" aria-labelledby="dropdownMenuButton" name="automarke" required>
                            <label for="marke" class="sr-only"></label>
                            <option value="0" disabled="true" selected="true">Auswählen</option>
                            @foreach($amarke as $cat)
                                <option value="{{$cat->id}}, {{$cat->name}}" id="{{$cat->name}}"  >{{$cat->name}}</option>
                            @endforeach
                        </select>
                </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Modell</p>
                        <select class="form-control" id="Modell" role="menu" aria-labelledby="menu1" name="automodell" required>
                            <label for="modell" class="sr-only"></label>
                            <option disabled="true" selected="true" class="form-control">Auswählen</option>
                        </select>
                </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Baujahr</p>
                        <select class="form-control" id="Farbe" role="menu" aria-labelledby="menu1" name="autobaujahr" required>
                            <option value="0" disabled="true" selected="true">Auswählen</option>
                            @foreach($baujahr as $bj)
                                <option value="{{$bj->jahr}}" name="baujahr">{{$bj->jahr}}</option>
                            @endforeach
                        </select>
                </div>
        </div>


        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Farbe</p>
                        <select class="form-control" id="#" role="menu" aria-labelledby="menu1" name="autofarbe" required>
                            <option value="0" disabled="true" selected="true" name="farbe">Auswählen</option>
                            @foreach($farbe as $f)
                                <option value="{{$f->name}}">{{$f->name}}</option>
                            @endforeach
                        </select>
                </div>
        </div>


            <div class="col-xs-6 col-md-3">
                <div class="buttonUndText">
                    <p class="Text">Kraftstoff</p>
                    <select class="form-control" id="productname2" role="menu" aria-labelledby="menu1" name="autokraftstoff" required>
                        <option value="0" disabled="true" selected="true">Auswählen</option>
                        @foreach($kraftstoff as $kr)
                            <option value="{{$kr->name}}" >{{$kr->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-xs-6 col-md-3">
                <div class="buttonUndTextFuerPreis">
                    <p class="TextPreisProTag">Preis</p>
                    <div class="form-group2">
                        <div class="input-group preis">
                            <label for="preis" class="sr-only"></label>
                            <input type="text" class="form-control" name="autopreis" id="inputPreis" required>
                            <span class="input-group-addon">€</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-3">
                <div class="buttonUndText">
                    <p class="TextBild">Bild</p>
                    <input type="file" name="img[]" class="file" accept="image/*" name="bild" id="file1" >
                    <div class="input-group mx-sm-4">
                            <input type="text" id="inputBild" class="form-control input" name="autobild">
                    <button id="buttonBild" class="browse btn btn-basic input" type="button">Öffnen
                        <span class="glyphicon glyphicon-picture"></span></button>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-3">
                <div class="buttonUndText">
                    <p class="Text">Details</p>
                    <div class="form-group2 inputDetails">
                            <textarea class="form-control detailsInput" rows="4" id="Details" name="autodetails" placeholder="Details zum Auto ..."></textarea>
                    </div>
                </div>
            </div>
        </div>

            <div class="angabeStandort">

            <div class="col-xs-6 col-md-4">
                <div class="buttonUndTextPostleitzahl">
                    <p class="Text">Postleitzahl</p>
                    <div class="form-group3">
                        <div class="input-group">
                            <label for="postleitzahl" class="sr-only"></label>
                            <input type="text" class="form-control" name="autopostleitzahl" id="postleitzahl" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-4">
                <div class="buttonUndTextOrt">
                    <p class="Text">Ort</p>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="ort" class="sr-only"></label>
                            <input type="text" class="form-control" name="autoort" id="inputOrt" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-home"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-4">
                <div class="buttonUndTextPostleitzahl">
                    <p class="Text">Straße/Nr.</p>
                    <div class="form-group3">
                        <div class="input-group">
                            <label for="strasse" class="sr-only"></label>
                            <input type="text" class="form-control" name="autostrasseNr" id="strasseNr" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <div class="buttonUndText">
                        <p class="TextVon">Von</p>
                        <div class="input-group date" id='datetimepicker6'>
                            <input type='text' class="form-control" name="autostartdate" id="startdate" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <div class="buttonUndText">
                        <p class="TextVon">Bis</p>
                        <div class='input-group date' id='datetimepicker7'>
                            <input type="text" class="form-control" name="autoenddate" id="enddate" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="buttonUndText">
                 <button type="submit" class="btn btn-basic1 btn-responsive" id="MeldeAutoAnButton">Melde mein Auto an<span
                                    class="glyphicon glyphicon-triangle-right"></span></button>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>


<script>
    $( function() {
        var dateFormat = "dd/mm/yy",
            from = $( "#startdate" )
                .datepicker({
                    dateFormat: "dd/mm/yy",
                    defaultDate: "0w",
                    changeMonth: true,
                    numberOfMonths: 3,
                    minDate:0,
                    monthNames: ['Januar','Februar','März','April','Mai','Juni',
                        'Juli','August','September','Oktober','November','Dezember'],
                    monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
                        'Jul','Aug','Sep','Okt','Nov','Dez'],
                    dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
                    dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
                    dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa']
                })
                .on( "change", function() {
                    to.datepicker( "option", "minDate", getDate( this ) );
                }),
            to = $( "#enddate" ).datepicker({
                //      defaultDate: "0w",
                dateFormat: "dd/mm/yy",
                changeMonth: true,
                numberOfMonths: 3,
                monthNames: ['Januar','Februar','März','April','Mai','Juni',
                    'Juli','August','September','Oktober','November','Dezember'],
                monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
                    'Jul','Aug','Sep','Okt','Nov','Dez'],
                dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
                dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
                dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa']
            })
                .on( "change", function() {
                    from.datepicker( "option", "maxDate", getDate( this ) );
                });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );
</script>


@include('includes.footer')


<script type="text/javascript">

    $(document).ready(function (){       //zählt wie oft das erste select (erste dropdownliste); addiert jedes mal um eins hoch

        $(document).on('change','#prod_cat_id',function () {

            //        console.log("hmm its change");

            var cat_id = $(this).val(); //über this den ausgewählten wert im ersten selcet speichern in eine variable
            //             console.log(cat_id);        //in konsole in firefox wird der ausgewählte wert angezeigt.


            var div=$(this).parent().parent().parent().parent().parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findModellName')!!}',
                data:{'id':cat_id},     //id der im ersten select gespeichert wird, wird hier ausgewählt (-> oben in value={..}})
                success:function(data){
                    //  console.log('success')

                    //  console.log(data);

                    //  console.log(data.length);  //gibt in der konsole nach auswahl der Automarke die Länge der dazugehöroigen Modelle aus
                    //also audi hat z.B. 4 Modelle bisher in der Datenbank --> Ergebnis also: 4
                    op+='<option name="modell" value="0" selected disabled>Wählen Sie aus</option>';

                    for(var i=0; i<data.length; i++){
                        op+='<option name="modell" value="'+data[i].id+'  , '+data[i].aModellname+'">'+data[i].aModellname+'</option>';
                    }

                    div.find('#Modell').html(" ");
                    div.find('#Modell').append(op);

                },
                error:function(){

                }
            });
        });
    });

</script>

</body>


</html>