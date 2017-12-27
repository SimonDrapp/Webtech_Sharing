<!DOCTYPE html>

<html>

<head>
    @include('includes.head')
    <title>my-easysharing </title>

</head>

<body>
    @include('includes.header')
    <h1>Automodelle die angeboten werden</h1>

    <div class="container">
        <div class="col-lg-4">

    {{Form::open(array('url'=>'','files'=>true))}}

        <div class="form-group">
            <label for="">Automarken</label>
            <select class="form-control input-sm" name="category" id="category">
                @foreach($amarke as $amarken)
                <option value="{{$amarken->id}}">{{$amarken->name}}</option>
                    @endforeach
            </select>
        </div>


    <div class="form-group">
        <label for="">Automodelle</label>
        <select class="form-control input-sm" name="subcategory" id="subcategory">
            <option value=""></option>
        </select>
    </div>

            {{Form::close()}}
        </div>
</div>


 <!--   @if(count($amarke)>1)
        @foreach($amarke as $am)
            <div class="well">
                     <h3><a href="/AMarke/{{$am->id}}"> {{$am -> name}}</a> </h3>
                <small></small>
            </div>
            @endforeach
        @else

        <p>Keine Modelle gefunden</p>
            @endif
    -->




    @include('includes.footer')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">

        $('#category').on('change',function(e){
            console.log(e);

            var cat_id = e.target.value;

            $.get('/ajax-subcat?cat_id=' + cat_id, function(data){

                $('#subcategory').empty();
                $.each(data,function(index,subcatObj){
                    $('#subcategory').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                });

            });
        });
    </script>

</body>

</html>
