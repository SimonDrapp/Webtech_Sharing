<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.head')
    <title>my-easysharing | Home </title>
</head>
<body>


@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif





</body>
</html>