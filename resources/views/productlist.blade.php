<!DOCTYPE html>

<html>

<head>
    <title></title>
    @include('includes.head')
</head>


<body>
<center>


        <span>Automarke: </span>
        <select style="width: 200px" class="productcategory" id="prod_cat_id">

            <option value="0" disabled="true" selected="true">--SELECT--</option>
            @foreach($prod as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
        </select>

        <span>Autmodell: </span>
        <select style="width: 200px" class="productname">

            <option value="0" disabled="true" selected="true">Product Name</option>
        </select>

    <span>Product Price</span>
    <input type="text" class="prod_price">

</center>

<script type="text/javascript">

    $(document).ready(function (){       //zählt wie oft das erste select (erste dropdownliste); addiert jedes mal um eins hoch

        $(document).on('change','.productcategory',function () {

    //        console.log("hmm its change");

                var cat_id = $(this).val(); //über this den ausgewählten wert im ersten selcet speichern in eine variable
   //             console.log(cat_id);        //in konsole in firefox wird der ausgewählte wert angezeigt.


            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findProductName')!!}',
                data:{'id':cat_id},     //id der im ersten select gespeichert wird, wird hier ausgewählt (-> oben in value={..}})
                success:function(data){
                  //  console.log('success')

                   //  console.log(data);

                  //  console.log(data.length);  //gibt in der konsole nach auswahl der Automarke die Länge der dazugehöroigen Modelle aus
                                                    //also audi hat z.B. 4 Modelle bisher in der Datenbank --> Ergebnis also: 4

                    op+='<option value="0" selected disabled>chose product</option>';
                    for(var i=0; i<data.length; i++){
                        op+='<option value="'+data[i].id+'">'+data[i].aModellname+'</option>';
                    }

                    div.find('.productname').html(" ");
                    div.find('.productname').append(op);

                },
                error:function(){

                }
            });
        });

    });
        


</script>
</body>

</html>