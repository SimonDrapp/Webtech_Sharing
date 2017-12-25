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
                            <select class="form-control" id="prod_cat_id" role="menu" aria-labelledby="dropdownMenuButton">
                                <option value="0" disabled="true" selected="true">Auswählen</option>
                                @foreach($prod as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Modell</p>
                            <div class="dropdown">

                                <form name="form1">
                                <select class="form-control" id="Modell" role="menu" aria-labelledby="menu1">

                                    <option value="0" disabled="true" selected="true">Auswählen</option>


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

                                <select class="form-control" id="Autotyp" role="menu" aria-labelledby="menu1">

                                    <option value="0" disabled="true" selected="true">Auswählen</option>

                            </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndText">
                        <p class="Text">Baujahr</p>
                        <div class="dropdown">
                            <form name="form">

                                <select class="form-control" id="#" role="menu" aria-labelledby="menu1">

                                    <option value="0" disabled="true" selected="true">Auswählen</option>
                                    @foreach($baujahr as $bj)
                                        <option value="{{$bj->id}}">{{$bj->jahr}}</option>
                                    @endforeach
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

                        <select class="form-control" id="productname2" role="menu" aria-labelledby="menu1">

                            <option value="0" disabled="true" selected="true">Auswählen</option>
                            @foreach($kraftstoff as $kr)
                                <option value="{{$kr->id}}">{{$kr->name}}</option>
                            @endforeach
                            </select>
                    </div>
                </div>

                    <div class="col-xs-6 col-md-4">
                        <div class="buttonUndText">
                            <p class="TextBild">Bild</p>
                            <input type="file" name="img[]" class="file" accept="image/*" id="file1">
                            <div class="input-group mx-sm-4">
                                <form enctype="multipart/form-data">
                                    <input type="text" id="inputBild" class="form-control input">
                                </form>
                            </div>
                            <button id="buttonBild" class="browse btn btn-basic input" type="button">Öffnen
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
                                <textarea class="form-control detailsInput" rows="4" id="Details" name="inputDetails" placeholder="Details zum Auto ..."></textarea>
                                </form>
                            </div>
                    </div>
                </div>


                <div class="col-xs-6 col-md-3">
                    <div class="buttonUndTextFuerPreis">
                        <p class="TextPreisProTag">Preis/T.</p>
                        <div class="form-group2">
                            <form action="EigenschaftAutovermietung2.blade.php" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon">€</span>
                            <label for="inputPreis" class="sr-only"></label>
                            <input type="text" class="form-control" id="inputPreis" name="inputPreis">
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
                            <input type='text' class="form-control" name="startdate" id="startdate"/>
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
                            <input type='text' class="form-control" name="enddate" id="enddate"/>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="buttonUndText">
                    <a href="/Autoeigenschaft2" id="MeldeAutoAn"> <button type="button" class="btn btn-basic1 btn-responsive" id="MeldeAutoAnButton">Melde mein Auto an<span
                                    class="glyphicon glyphicon-triangle-right"></span></button></a>
                </div>
            </div>
        </div>
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
                            numberOfMonths: 2,
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
                        changeMonth: true,
                        numberOfMonths: 2
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

                            op+='<option value="0" selected disabled>Wählen Sie aus</option>';
                            for(var i=0; i<data.length; i++){
                                op+='<option value="'+data[i].id+'">'+data[i].aModellname+'</option>';
                            }

                            div.find('#Modell').html(" ");
                            div.find('#Modell').append(op);

                        },
                        error:function(){

                        }
                    });
                });

                    $(document).on('change', '#Modell',function(){

                        var prod_id = $(this).val();

                        var a= $(this).parent().parent().parent().parent().parent().parent();

                        console.log(prod_id);

                        var op="";

                        $.ajax({
                            type:'get',
                            url:'{!!URL::to('findAutotyp')!!}',
                            data:{'id':prod_id},     //id der im ersten select gespeichert wird, wird hier ausgewählt (-> oben in value={..}})
                            success:function(data){


                                op+='<option value="0" selected disabled>Wählen Sie aus</option>';
                                for(var i=0; i<data.length; i++){
                                    op+='<option value="'+data[i].id+'">'+data[i].details+'</option>';
                                }

                                a.find('#Autotyp').html(" ");
                                a.find('#Autotyp').append(op);

                            },
                            error:function(){

                            }
                        });

                    });
            });

        </script>

    </body>
</html>