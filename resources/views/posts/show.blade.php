<!DOCTYPE html>

<html>

<head>
    @include('includes.head')
    <title>my-easysharing </title>
</head>

<body>

    @foreach($amodell as $amo)
<h1>{{$amo ->aModellname}}</h1>
        @endforeach



</body>

</html>
